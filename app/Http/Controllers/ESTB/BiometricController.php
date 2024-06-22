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

        // Determine current month, year, and date
        if ($request->filled('date')) {
            $date = $request->date;
            $currentMonth = Carbon::parse($date)->month;
            $currentYear = Carbon::parse($date)->year;
        } else {
            $currentMonth = date('n');
            $currentYear = date('Y');
            $date = Carbon::now()->format('Y-m-d');
        }

        // Retrieve staff and employees data with active departments
        $staffData = Staff::with('activedepartments')
            ->whereIn('id', function($q) {
                $q->select('staff_id')
                    ->from('association_staff')
                    ->where('status', 'active')
                    ->whereIn('association_id', function($q1) {
                        $q1->select('id')
                            ->from('associations')
                            ->whereIn('asso_name', [
                                'Confirmed', 'Probationary', 'Contractual', 
                                'Promotional Probationary', 'Temporary (non teaching)'
                            ]);
                    });
            })->get();

        // Retrieve biometric data for the selected date
        $externalData = DB::connection('mysql2')
            ->table("DeviceLogs_{$currentMonth}_{$currentYear}")
            ->select(
                "DeviceLogs_{$currentMonth}_{$currentYear}.logDate as logDate",
                'devices.DeviceFname as DeviceName',
                'employees.EmployeeName as EmployeeName',
                'employees.EmployeeCode as EmployeeCode'
            )
            ->join('devices', "DeviceLogs_{$currentMonth}_{$currentYear}.DeviceId", '=', 'devices.DeviceId')
            ->join('employees', "DeviceLogs_{$currentMonth}_{$currentYear}.EmployeeCode", '=', 'employees.EmployeeCode')
            ->whereDate("DeviceLogs_{$currentMonth}_{$currentYear}.logDate", $date)
            ->orderBy("DeviceLogs_{$currentMonth}_{$currentYear}.logDate", 'desc')
            ->orderBy('employees.EmployeeName')
            ->get();

        // Prepare combined data with unique logs per employee
        $combinedData = [];
        $processedEmployeeCodes = [];

        foreach ($externalData as $data) {
       
            if (!in_array($data->EmployeeCode, $processedEmployeeCodes)) {
                $matchedStaff = $staffData->firstWhere('EmployeeCode', $data->EmployeeCode);
                
                if ($matchedStaff) {
                    $data->id = $matchedStaff->id;
                    $data->EmployeeName = $matchedStaff->fname . ' ' . $matchedStaff->mname . ' ' . $matchedStaff->lname;
                    $data->DepartmentName = $matchedStaff->activedepartments->pluck('dept_shortname')->implode(',');
                                     
                    $combinedData[] = $data;
                    $processedEmployeeCodes[] = $data->EmployeeCode;
                }
            }
        }
       
        // Initialize arrays for storing aggregated data
        $entryLogsByDept = [];
        $leaveLogsByDept = [];
        $missingLogsByDept = [];

        // Process the combined data for entry and leave logs by department
        foreach ($combinedData as $data) {
            $deptName = $data->DepartmentName ?? 'Unknown';
           
            // Count entry logs by department
            if (!isset($entryLogsByDept[$deptName])) {
                $entryLogsByDept[$deptName] = 0;
            }
            $entryLogsByDept[$deptName]++;

           
        }
        

        // Retrieve missing log entries
        $missingLogs = $this->missingLogEntries($request)->getData();

        // Count missing logs by department
        foreach ($missingLogs as $missingLog) {
            $matchedStaff = staff::Where('EmployeeCode', $missingLog->EmployeeCode)->first();
           
            $data->leaveLogs = $this->isLeaveLog($matchedStaff, $date); // Check if employee has leave logs
           
            $deptName = $missingLog->dept_shortname ?? 'Unknown';
            if (!isset($missingLogsByDept[$deptName])) {
                $missingLogsByDept[$deptName] = 0;
            }
             // Check for leave logs
            //     if ($data->leaveLogs) {
                
            //         if (!isset($leaveLogsByDept[$deptName])) {
            //             $leaveLogsByDept[$deptName] = 0;
            //         }
            //         $leaveLogsByDept[$deptName]++;
            //     }
            //     else
            // {
            //     $missingLogsByDept[$deptName]++;
            // }
            
            if ($data->leaveLogs) {
                if (!isset($leaveLogsByDept[$deptName])) {
                        $leaveLogsByDept[$deptName] = 0;
                }
                $leaveLogsByDept[$deptName]++;
            } 
            else 
            {
                if (!isset($missingLogsByDept[$deptName])) {
                    $missingLogsByDept[$deptName] = 0;
                }
                $missingLogsByDept[$deptName]++;
            }
        }
       //dd($leaveLogsByDept);
        // Load missing employees
        $missingEmployeesBio = Staff::where('EmployeeCode', 0)
            ->select('id', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
            ->get();

        // Filter entry/exit logs if needed
        $entry_exit = $this->filterEntryExitLogs($currentMonth, $currentYear, $date, $externalData);

        // Get required data
        $employeePunchLogs = $entry_exit['employeePunchLogs'];

        // Pass data to the view
        return view('ESTB.Biometric.biometric_data', compact(
            'combinedData', 'entry_exit', 'employeePunchLogs', 'missingEmployeesBio', 'date', 'entryLogsByDept', 'leaveLogsByDept', 'missingLogsByDept'
        ));
    }


    
    private function isLeaveLog($employee, $date)
    {
    
        // Assuming leave_staff_applications relationship is correctly defined on the Staff model
        return $employee->leave_staff_applications()
            ->wherePivot('start', '<=', $date)
            ->wherePivot('end', '>=', $date)
            ->wherePivot('appl_status', '!=', 'rejected')
            ->exists();
           
    }





  

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
    


