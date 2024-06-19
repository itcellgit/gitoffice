<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\staff;
use App\Models\User;
use App\Mail\MissingLogEntryMail;
use Illuminate\Support\Facades\Mail;
class BiometricController extends Controller
{
    public function biometric_data(Request $request)
    {
        $currentMonth = "";
        $currentYear = "";
        $date = "";
        
        if ($request->filled('date')) {
            $date = $request->date;
            $currentMonth = Carbon::parse($date)->month;
            $currentYear = Carbon::parse($date)->year;
        } else {
            $currentMonth = date('n');
            $currentYear = date('Y');
            $date = Carbon::now()->format('Y-m-d');
        }
       
       


        $staffData = Staff::with('activedepartments')
        ->whereIn('id', function($q) {
        $q->select('staff_id')
          ->from('association_staff')
          ->where('status', 'active')
          ->whereIn('association_id', function($q1) {
              $q1->select('id')
                 ->from('associations')
                 ->where('asso_name', 'Confirmed')
                 ->orWhere('asso_name', 'Probationary')
                 ->orWhere('asso_name', 'Contractual')
                 ->orWhere('asso_name', 'Promotional Probationary')
                 ->orWhere('asso_name', 'Temporary (non teaching)');
          });
    })->get();
    //dd($staffData); 
   // ->get();

  
        
        // Retrieve data from the 'employees' table in the 'mysql2' connection
        $employeesData = DB::connection('mysql2')->table('employees')->get();

        // Perform the join operation in PHP code
        $biometricData = [];
        foreach ($staffData as $staff) {
            foreach ($employeesData as $employee) {
                if ($staff->EmployeeCode === $employee->EmployeeCode) {
                    $biometricData[] = [
                        'id' => $staff->id,
                        'full_name' => $staff->fname . ' ' . $staff->mname . ' ' . $staff->lname,
                        'EmployeeCode' => $employee->EmployeeCode,
                        'EmployeeName' => $employee->EmployeeName
                    ];
                    // No need to break here, as there might be multiple matches
                }
            }
        }

        // Retrieve data from the 'mysql2' database
        $externalData = DB::connection('mysql2')
            ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
            ->select(
                'DeviceLogs_' . $currentMonth . '_' . $currentYear . '.logDate as logDate',
                'devices.DeviceFname as DeviceName',
                'employees.EmployeeName as EmployeeName',
                'employees.EmployeeCode as EmployeeCode'
            )
            ->join('devices', 'DeviceLogs_' . $currentMonth . '_' . $currentYear . '.DeviceId', '=', 'devices.DeviceId')
            ->join('employees', 'DeviceLogs_' . $currentMonth . '_' . $currentYear . '.EmployeeCode', '=', 'employees.EmployeeCode')
            ->orderBy('DeviceLogs_' . $currentMonth . '_' . $currentYear . '.logDate', 'desc')
            ->orderBy('employees.EmployeeName')
            ->get();

        // Joining data in PHP
        $combinedData = [];
        foreach ($externalData as $data) {
            // Check if the employee code exists in staff data
            $matched = false;

            foreach ($staffData as $staff) {
                if ($data->EmployeeCode === $staff->EmployeeCode) {
                    $data->id = $staff->id;
                    $data->EmployeeName = $staff->fname . ' ' . $staff->mname . ' ' . $staff->lname; // Concatenate fname, mname, and lname as EmployeeName
                    $data->DepartmentName = "";
                    foreach ($staff->activedepartments as $dept) {
                        $data->DepartmentName .= $dept->dept_shortname . ',';
                    }
                    $combinedData[] = $data;
                    $matched = true;
                    break;
                }
            }

            // If no match is found, add the data as it is
            if (!$matched) {
                $combinedData[] = $data;
            }
        }

        // missing punch data
        $missingEmployeesBio = staff::where('EmployeeCode', 0)
            ->select('id', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
            ->get();

        // Filter entry and exit logs
        $entry_exit = $this->filterEntryExitLogs($currentMonth, $currentYear, $date, $externalData);
        //dd($entry_exit);
        $employeePunchLogs = $entry_exit['employeePunchLogs'];
         
        

        // Return the view with the retrieved data
        return view('ESTB.Biometric.biometric_data', compact('combinedData', 'entry_exit', 'employeePunchLogs', 'missingEmployeesBio','date'));
    }

   // public function filterEntryExitLogs($currentMonth, $currentYear, $logDate, $externalData)
    // {
    //     // Generate table name based on current month and year
    //     $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

    //     // Retrieve log entries from the database for the specified date
    //     $logs = DB::connection('mysql2')
    //         ->table($tableName)
    //         ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
    //         ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
    //         ->where('LogDate_Date', $logDate)
    //         ->orderBy("$tableName.EmployeeCode")
    //         ->orderBy("$tableName.logDate", 'asc')
    //         ->get();
    //    // dd($logs);
    //     // Initialize arrays for entry and exit logs
    //     $entryLogs = [];
    //     $exitLogs = [];

    //     // Group logs by employee code
    //     $logsByEmployee = $logs->groupBy('EmployeeCode');
    //     $employeePunchLogs = [];

    //     // Iterate through each employee's logs
    //     foreach ($logsByEmployee as $employeeCode => $employeeLogs) {
    //         // Store logs directly without wrapping in an extra array
    //         $employeePunchLogs[$employeeCode] = $employeeLogs;

    //         // Sort employee logs by log date
    //         $sortedLogs = $employeeLogs->sortBy('LogDate');

    //         // Set the first log as the entry log and the last log as the exit log
    //         $entryLogs[$employeeCode] = $sortedLogs->first();
    //         $exitLogs[$employeeCode] = $sortedLogs->last();

    //         // If there's only one log for the employee, set exit log as null
    //         if ($employeeLogs->count() === 1) {
    //             $exitLogs[$employeeCode] = null;
    //         }
    //     }

      
        
    //     $durations = [];
    //     $totalDurations = [];

    //     foreach ($entryLogs as $employeeCode => $entryLog) {
    //         if ($entryLog && $exitLogs[$employeeCode]) {
    //             $entryTime = strtotime($entryLog->LogDate);
    //             $exitTime = strtotime($exitLogs[$employeeCode]->LogDate);

    //             // Calculate duration in seconds
    //             $durationSeconds = $exitTime - $entryTime;

    //             // Convert seconds to hours and minutes
    //             $durationHours = floor($durationSeconds / 3600); // Get whole hours
    //             $remainingSeconds = $durationSeconds % 3600; // Get remaining seconds after getting whole hours
    //             $durationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

    //             // Format the duration
    //             $formattedDuration = "$durationHours hrs $durationMinutes mins";

    //             // Store the duration for each employee
    //             $durations[$employeeCode] = $formattedDuration;

    //             // Add the duration to the total duration for the employee
    //             if (!isset($totalDurations[$employeeCode])) {
    //                 $totalDurations[$employeeCode] = $durationSeconds;
    //             } else {
    //                 $totalDurations[$employeeCode] += $durationSeconds;
    //             }
    //         } else {
    //             // No duration if either entry or exit log is missing
    //             $durations[$employeeCode] = null;
    //         }
    //     }

    //     // Convert total durations to formatted strings
    //     foreach ($totalDurations as $employeeCode => $totalDurationSeconds) {
    //         $totalDurationHours = floor($totalDurationSeconds / 3600); // Get whole hours
    //         $remainingSeconds = $totalDurationSeconds % 3600; // Get remaining seconds after getting whole hours
    //         $totalDurationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

    //         // Format the total duration
    //         $formattedTotalDuration = "$totalDurationHours hrs $totalDurationMinutes mins";

    //         // Update the total duration with the formatted string
    //         $totalDurations[$employeeCode] = $formattedTotalDuration;
    //     }


    //     // Calculate punch counts for each employee
    //     $punchCounts = $logsByEmployee->map->count();

    //     return [
    //         'entryLogs' => $entryLogs,
    //         'exitLogs' => $exitLogs,
    //         'punchCounts' => $punchCounts,
    //         'durations' => $durations,
    //         'employeePunchLogs' => $employeePunchLogs,
            
    //     ];
    // }


    // public function filterEntryExitLogs($currentMonth, $currentYear, $logDate, $externalData)
    //     {
    //         // Generate table name based on current month and year
    //         $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

    //         // Retrieve log entries from the database for the specified date
    //         $logs = DB::connection('mysql2')
    //             ->table($tableName)
    //             ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
    //             ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
    //             ->where('LogDate_Date', $logDate)
    //             ->orderBy("$tableName.EmployeeCode")
    //             ->orderBy("$tableName.LogDate", 'asc')
    //             ->get();

    //         // Initialize arrays for entry and exit logs
    //         $entryLogs = [];
    //         $exitLogs = [];

    //         // Group logs by employee code
    //         $logsByEmployee = $logs->groupBy('EmployeeCode');
    //         $employeePunchLogs = [];

    //         // Iterate through each employee's logs
    //         foreach ($logsByEmployee as $employeeCode => $employeeLogs) {
    //             // Store logs directly without wrapping in an extra array
    //             $employeePunchLogs[$employeeCode] = $employeeLogs;

    //             // Sort employee logs by log date
    //             $sortedLogs = $employeeLogs->sortBy('LogDate')->values(); // Ensure sorting returns indexed array

    //             // Initialize filtered logs array
    //             $filteredLogs = [];

    //             // Iterate through sorted logs and filter out logs within 60 seconds of each other
    //             foreach ($sortedLogs as $log) {
    //                 if (empty($filteredLogs)) {
    //                     $filteredLogs[] = $log;
    //                 } else {
    //                     $lastLog = end($filteredLogs);
    //                     $lastLogDateTime = new \DateTime($lastLog->LogDate);
    //                     $currentLogDateTime = new \DateTime($log->LogDate);

    //                     // Check if the difference is greater than 60 seconds
    //                     if ($currentLogDateTime->getTimestamp() - $lastLogDateTime->getTimestamp() > 60) {
    //                         $filteredLogs[] = $log;
    //                     }
    //                 }
    //             }

    //             // Set the first log as the entry log and the last log as the exit log
    //             if (!empty($filteredLogs)) {
    //                 $entryLogs[$employeeCode] = $filteredLogs[0];
    //                 $exitLogs[$employeeCode] = count($filteredLogs) > 1 ? end($filteredLogs) : null;
    //             }
    //         }

    //         $durations = [];
    //         $totalDurations = [];

    //         foreach ($entryLogs as $employeeCode => $entryLog) {
    //             if ($entryLog && $exitLogs[$employeeCode]) {
    //                 $entryTime = strtotime($entryLog->LogDate);
    //                 $exitTime = strtotime($exitLogs[$employeeCode]->LogDate);

    //                 // Calculate duration in seconds
    //                 $durationSeconds = $exitTime - $entryTime;

    //                 // Convert seconds to hours and minutes
    //                 $durationHours = floor($durationSeconds / 3600); // Get whole hours
    //                 $remainingSeconds = $durationSeconds % 3600; // Get remaining seconds after getting whole hours
    //                 $durationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

    //                 // Format the duration
    //                 $formattedDuration = "$durationHours hrs $durationMinutes mins";

    //                 // Store the duration for each employee
    //                 $durations[$employeeCode] = $formattedDuration;

    //                 // Add the duration to the total duration for the employee
    //                 if (!isset($totalDurations[$employeeCode])) {
    //                     $totalDurations[$employeeCode] = $durationSeconds;
    //                 } else {
    //                     $totalDurations[$employeeCode] += $durationSeconds;
    //                 }
    //             } else {
    //                 // No duration if either entry or exit log is missing
    //                 $durations[$employeeCode] = null;
    //             }
    //         }

    //         // Convert total durations to formatted strings
    //         foreach ($totalDurations as $employeeCode => $totalDurationSeconds) {
    //             $totalDurationHours = floor($totalDurationSeconds / 3600); // Get whole hours
    //             $remainingSeconds = $totalDurationSeconds % 3600; // Get remaining seconds after getting whole hours
    //             $totalDurationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

    //             // Format the total duration
    //             $formattedTotalDuration = "$totalDurationHours hrs $totalDurationMinutes mins";

    //             // Update the total duration with the formatted string
    //             $totalDurations[$employeeCode] = $formattedTotalDuration;
    //         }

    //         // Calculate punch counts for each employee, considering filtered logs
    //         $punchCounts = $logsByEmployee->map(function ($employeeLogs) {
    //             $filteredLogs = collect();
    //             foreach ($employeeLogs->sortBy('LogDate')->values() as $log) {
    //                 if ($filteredLogs->isEmpty()) {
    //                     $filteredLogs->push($log);
    //                 } else {
    //                     $lastLog = $filteredLogs->last();
    //                     $lastLogDateTime = new \DateTime($lastLog->LogDate);
    //                     $currentLogDateTime = new \DateTime($log->LogDate);

    //                     if ($currentLogDateTime->getTimestamp() - $lastLogDateTime->getTimestamp() > 60) {
    //                         $filteredLogs->push($log);
    //                     }
    //                 }
    //             }
    //             return $filteredLogs->count();
    //         });

    //         return [
    //             'entryLogs' => $entryLogs,
    //             'exitLogs' => $exitLogs,
    //             'punchCounts' => $punchCounts,
    //             'durations' => $durations,
    //             'employeePunchLogs' => $employeePunchLogs,
    //         ];
    //     }

    public function filterEntryExitLogs($currentMonth, $currentYear, $logDate, $externalData)
    {
        // Generate table name based on current month and year
        $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;
    
        // Retrieve log entries from the database for the specified date
        $logs = DB::connection('mysql2')
            ->table($tableName)
            ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
            ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
            ->where('LogDate_Date', $logDate)
            ->orderBy("$tableName.EmployeeCode")
            ->orderBy("$tableName.LogDate", 'asc')
            ->get();
    
        // Initialize arrays for entry and exit logs
        $entryLogs = [];
        $exitLogs = [];
    
        // Group logs by employee code
        $logsByEmployee = $logs->groupBy('EmployeeCode');
        $employeePunchLogs = [];
        $durations = [];
    
        // Function to filter logs within 60 seconds of each other
        $filterLogs = function ($logs) {
            $filteredLogs = collect();
            foreach ($logs as $log) {
                if ($filteredLogs->isEmpty()) {
                    $filteredLogs->push($log);
                } else {
                    $lastLog = $filteredLogs->last();
                    $lastLogDateTime = new \DateTime($lastLog->LogDate);
                    $currentLogDateTime = new \DateTime($log->LogDate);
                    if ($currentLogDateTime->getTimestamp() - $lastLogDateTime->getTimestamp() > 60) {
                        $filteredLogs->push($log);
                    }
                }
            }
            return $filteredLogs;
        };
    
        // Iterate through each employee's logs
        foreach ($logsByEmployee as $employeeCode => $employeeLogs) {
            $sortedLogs = $employeeLogs->sortBy('LogDate')->values(); // Ensure sorting returns indexed array
            $filteredLogs = $filterLogs($sortedLogs);
    
            // Store logs directly without wrapping in an extra array
            $employeePunchLogs[$employeeCode] = $filteredLogs;
    
            // Initialize pair-wise durations for each employee
            $pairDurations = [];
            $totalDurationSeconds = 0;
           
    
            // Calculate duration for each pair of logs
            for ($i = 0; $i < count($filteredLogs) - 1; $i += 2) {
                $entryLog = $filteredLogs[$i];
                $exitLog = $filteredLogs[$i + 1];
    
                if ($entryLog && $exitLog) {
                    $entryTime = strtotime($entryLog->LogDate);
                    $exitTime = strtotime($exitLog->LogDate);
                    $durationSeconds = $exitTime - $entryTime;
    
                    $durationHours = floor($durationSeconds / 3600);
                    $remainingSeconds = $durationSeconds % 3600;
                    $durationMinutes = floor($remainingSeconds / 60);
    
                    $formattedDuration = "$durationHours hrs $durationMinutes mins";
                    $pairDurations[] = $formattedDuration;
    
                    $totalDurationSeconds += $durationSeconds;
                }
            }
    
            // Store the first pair's entry and exit logs
            if (!empty($filteredLogs)) {
                $entryLogs[$employeeCode] = $filteredLogs->first();
                $exitLogs[$employeeCode] = count($filteredLogs) > 1 ? $filteredLogs->last() : null;
            }
    
            // Set the duration for the employee as null if no pairs are found
            if (empty($pairDurations)) {
                $durations[$employeeCode] = null;
            } else {
                $totalDurationHours = floor($totalDurationSeconds / 3600);
                $remainingSeconds = $totalDurationSeconds % 3600;
                $totalDurationMinutes = floor($remainingSeconds / 60);
                $formattedTotalDuration = "$totalDurationHours hrs $totalDurationMinutes mins";
                $durations[$employeeCode] = $formattedTotalDuration   ;
            }
               
            }
        
    
        // Calculate punch counts for each employee
        $punchCounts = $logsByEmployee->map(function ($employeeLogs) use ($filterLogs) {
            $filteredLogs = $filterLogs($employeeLogs->sortBy('LogDate')->values());
            return $filteredLogs->count();
        });

        $oddCount = 0;
        $evenCount = 0;

        $punchCounts->each(function ($count) use (&$oddCount, &$evenCount) {
            if ($count % 2 === 0) {
                $evenCount++;
            } else {
                $oddCount++;
            }
        });


    
        return [
            'entryLogs' => $entryLogs,
            'exitLogs' => $exitLogs,
            'punchCounts' => $punchCounts,
            'durations' => $durations,
            'oddCount' => $oddCount,
            'evenCount' => $evenCount,
            'employeePunchLogs' => $employeePunchLogs,
        ];
    }
    
  

    
    public function missingLogEntries(Request $request)
    {
        // Set the date to the current date if not provided
        $date = $request->input('date') ?? Carbon::now()->format('Y-m-d');
    
        // Get the current month and year
        $parsedDate = Carbon::parse($date);
        $currentMonth = $parsedDate->month;
        $currentYear = $parsedDate->year;
    
        // Fetch the employee codes with logs on the specified date
        $logs = DB::connection('mysql2')
            ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
            ->where('LogDate_Date', $date)
            ->pluck('EmployeeCode')
            ->toArray();
    
        // Fetch all staff records along with user information
        $staffData = Staff::join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
            ->where('department_staff.status', 'active')
            ->with(['leave_staff_applications' => function ($q) use ($date) {
                $q->wherePivot('start', '<=', $date)
                    ->wherePivot('end', '>=', $date)
                    ->wherePivot('appl_status', '!=', 'rejected');
            }])
            ->whereNotIn('EmployeeCode', $logs)
            ->select('staff.id', 'departments.dept_shortname', 'EmployeeCode', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
            ->distinct('staff.id')
            ->orderBy('department_staff.department_id')
            ->orderBy('staff.fname')
            ->get();

            
    
        return response()->json($staffData);
    }


    public function sendMissingPunchesEmail(Request $request)
    {
        // Set the date to the current date if not provided
        $date = $request->input('date') ?? Carbon::now()->format('Y-m-d');

        // Get the current month and year
        $parsedDate = Carbon::parse($date);
        $currentMonth = $parsedDate->month;
        $currentYear = $parsedDate->year;

        // Fetch the employee codes with logs on the specified date
        $logs = DB::connection('mysql2')
            ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
            ->where('LogDate_Date', $date)
            ->pluck('EmployeeCode')
            ->toArray();

        // Fetch all staff records along with user information
        $missingData = Staff::join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
            ->join('users', 'users.id', '=', 'staff.user_id') // Join with users table
            ->where('department_staff.status', 'active')
            ->whereNotIn('EmployeeCode', $logs)
            ->whereNotIn('staff.id', function ($query) use ($date) {
                $query->select('staff_id')
                    ->from('leave_staff_applications')
                    ->where('start', '<=', $date)
                    ->where('end', '>=', $date)
                    ->where('appl_status', '!=', 'rejected');
            })
            ->select('staff.id', 'departments.dept_shortname', 'EmployeeCode', 'users.email', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
            ->distinct('staff.id')
            ->orderBy('department_staff.department_id')
            ->orderBy('staff.fname')
            ->get();
           
           // $staff=staff::where('id',449)->first();
            //Mail::to('kle.kartik@gmail.com')->send(new MissingLogEntryMail($staff, $date));

            foreach ($missingData as $staff) {
                //dd($staff);
                // Check if email exists
                if ($staff->email) {
                    // Send email to the user
                    Mail::to('kle.kartik@gmail.com')->send(new MissingLogEntryMail($staff, $date));
                    
                } else {
                    Log::warning("Missing email for staff member: $staff->full_name");
                }
            }
         
        return response()->json(['message' => 'Emails sent successfully', 'staff_data' => $missingData]);
    }

    // public function filterEmployeeMonthlyLogs(Request $request)
    // {
    //     $empcode = $request->input('employee');
    //     $currentMonth = $request->input('month') ?? date('n');
    //     $currentYear = $request->input('year') ?? date('Y');
    
    //     // Generate table name based on current month and year
    //     $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;
    
    //     // Calculate the first and last date of the month
    //     $firstDayOfMonth = date("Y-m-01", strtotime("$currentYear-$currentMonth-01"));
    //     $lastDayOfMonth = date("Y-m-t", strtotime("$currentYear-$currentMonth-01"));
    
    //     // Retrieve log entries from the database for the entire month
    //     $logs = DB::connection('mysql2')
    //         ->table($tableName)
    //         ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
    //         ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
    //         ->whereBetween('LogDate_Date', [$firstDayOfMonth, $lastDayOfMonth])
    //         ->where("$tableName.EmployeeCode", $empcode)
    //         ->orderBy("$tableName.LogDate", 'asc')
    //         ->get();
            
    
    //     // Group logs by employee code
    //     $logsByEmployee = $logs->groupBy('EmployeeCode');
    //     $employeeLogs = [];
    
    //     // Iterate through each employee's logs
    //     foreach ($logsByEmployee as $employeeCode => $logs) {
    //         // Group logs by date
    //         $logsByDate = $logs->groupBy(function($log) {
    //             return date('Y-m-d', strtotime($log->LogDate));
    //         });
    
    //         foreach ($logsByDate as $date => $dailyLogs) {
    //             // Get the first log entry of the day (entry log)
    //             $entryLog = $dailyLogs->first();
    //             // Get the last log entry of the day, or null if there's only one log (exit log)
    //             $exitLog = $dailyLogs->count() > 1 ? $dailyLogs->last() : null;
    
    //             // Store the entry and exit logs for the employee on that date
    //             $employeeLogs[$employeeCode][$date] = [
    //                 'entryLog' => $entryLog,
    //                 'exitLog' => $exitLog,
    //                 'entryDevice' => $entryLog ? $entryLog->DeviceFName : null,
    //                 'exitDevice' => $exitLog ? $exitLog->DeviceFName : null,
    //             ];
    //         }
    //     }
    
    //     // Retrieve all active employees
    //     $employees = Staff::with('activedepartments')
    //         ->whereIn('id', function($q) {
    //             $q->select('staff_id')
    //                 ->from('association_staff')
    //                 ->where('status', 'active')
    //                 ->whereIn('association_id', function($q1) {
    //                     $q1->select('id')
    //                         ->from('associations')
    //                         ->whereIn('asso_name', [
    //                             'Confirmed',
    //                             'Probationary',
    //                             'Contractual',
    //                             'Promotional Probationary',
    //                             'Temporary (non teaching)'
    //                         ]);
    //                 });
    //         })
    //         ->get();
    
    //     // Get the selected employee's details
    //     $selectedEmployee = $employees->firstWhere('EmployeeCode', $empcode);
    
    //     // Pass data to the Blade view
    //     return view('ESTB.Biometric.monthly', compact(['employeeLogs', 'employees', 'currentMonth', 'currentYear', 'selectedEmployee']));
    // }
    public function filterEmployeeMonthlyLogs(Request $request)
{
    $empcode = $request->input('employee');
    $currentMonth = $request->input('month') ?? date('n');
    $currentYear = $request->input('year') ?? date('Y');

    // Generate table name based on current month and year
    $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

    // Calculate the first and last date of the month
    $firstDayOfMonth = date("Y-m-01", strtotime("$currentYear-$currentMonth-01"));
    $lastDayOfMonth = date("Y-m-t", strtotime("$currentYear-$currentMonth-01"));

    // Retrieve log entries from the database for the entire month
    $logs = DB::connection('mysql2')
        ->table($tableName)
        ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
        ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
        ->whereBetween('LogDate_Date', [$firstDayOfMonth, $lastDayOfMonth])
        ->where("$tableName.EmployeeCode", $empcode)
        ->orderBy("$tableName.LogDate", 'asc')
        ->get();

    // Group logs by employee code
    $logsByEmployee = $logs->groupBy('EmployeeCode');
    $employeeLogs = [];
    $employeeTotalDurations = [];
    $employeeWorkDays = [];

    foreach ($logsByEmployee as $employeeCode => $logs) {
        // Group logs by date
        $logsByDate = $logs->groupBy(function($log) {
            return date('Y-m-d', strtotime($log->LogDate));
        });

        foreach ($logsByDate as $date => $dailyLogs) {
            // Sort logs by LogDate
            $dailyLogs = $dailyLogs->sortBy('LogDate')->values();

            $entryLog = null;
            $exitLog = null;
            $dailyDurationSeconds = 0;

            foreach ($dailyLogs as $key => $log) {
                if ($key % 2 == 0) {
                    $entryLog = $log;
                } else {
                    $exitLog = $log;
                    if ($entryLog && $exitLog) {
                        $entryTime = strtotime($entryLog->LogDate);
                        $exitTime = strtotime($exitLog->LogDate);
                        $dailyDurationSeconds += ($exitTime - $entryTime);
                    }
                }
            }

            // Format the total duration for the day
            $duration = null;
            if ($dailyDurationSeconds > 0) {
                $duration = gmdate('H:i:s', $dailyDurationSeconds);

                // Update total duration and workdays count
                if (!isset($employeeTotalDurations[$employeeCode])) {
                    $employeeTotalDurations[$employeeCode] = 0;
                }
                if (!isset($employeeWorkDays[$employeeCode])) {
                    $employeeWorkDays[$employeeCode] = 0;
                }
                $employeeTotalDurations[$employeeCode] += $dailyDurationSeconds;
                $employeeWorkDays[$employeeCode]++;
            }

            // Store the entry and exit logs for the employee on that date
            $employeeLogs[$employeeCode][$date] = [
                'entryLog' => $dailyLogs->first(),
                'exitLog' => $dailyLogs->count() > 1 ? $dailyLogs->last() : null,
                'entryDevice' => $dailyLogs->first() ? $dailyLogs->first()->DeviceFName : null,
                'exitDevice' => $dailyLogs->count() > 1 ? $dailyLogs->last()->DeviceFName : null,
                'duration' => $duration,
            ];
        }
    }

    // Calculate average work duration for each employee
    $averageDurations = [];
    foreach ($employeeTotalDurations as $employeeCode => $totalDurationSeconds) {
        $workDays = $employeeWorkDays[$employeeCode];
        if ($workDays > 0) {
            $averageDurationSeconds = $totalDurationSeconds / $workDays;
            $averageDurations[$employeeCode] = gmdate('H:i:s', $averageDurationSeconds);
        } else {
            $averageDurations[$employeeCode] = null;
        }
    }

    // Retrieve all active employees
    $employees = Staff::with('activedepartments')
        ->whereIn('id', function($q) {
            $q->select('staff_id')
                ->from('association_staff')
                ->where('status', 'active')
                ->whereIn('association_id', function($q1) {
                    $q1->select('id')
                        ->from('associations')
                        ->whereIn('asso_name', [
                            'Confirmed',
                            'Probationary',
                            'Contractual',
                            'Promotional Probationary',
                            'Temporary (non teaching)'
                        ]);
                });
        })
        ->get();

    // Get the selected employee's details
    $selectedEmployee = $employees->firstWhere('EmployeeCode', $empcode);

    // Pass data to the Blade view
    return view('ESTB.Biometric.monthly', compact(['employeeLogs', 'employees', 'currentMonth', 'currentYear', 'selectedEmployee', 'averageDurations']));
}


    
   

    
}
    


