<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\staff;

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

        // Retrieve data from the 'staff' table in the 'mysql' connection
        $staffData = staff::with('activedepartments')->get();

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
            ->orderBy("$tableName.logDate", 'asc')
            ->get();
       // dd($logs);
        // Initialize arrays for entry and exit logs
        $entryLogs = [];
        $exitLogs = [];

        // Group logs by employee code
        $logsByEmployee = $logs->groupBy('EmployeeCode');
        $employeePunchLogs = [];

        // Iterate through each employee's logs
        foreach ($logsByEmployee as $employeeCode => $employeeLogs) {
            // Store logs directly without wrapping in an extra array
            $employeePunchLogs[$employeeCode] = $employeeLogs;

            // Sort employee logs by log date
            $sortedLogs = $employeeLogs->sortBy('LogDate');

            // Set the first log as the entry log and the last log as the exit log
            $entryLogs[$employeeCode] = $sortedLogs->first();
            $exitLogs[$employeeCode] = $sortedLogs->last();

            // If there's only one log for the employee, set exit log as null
            if ($employeeLogs->count() === 1) {
                $exitLogs[$employeeCode] = null;
            }
        }

      
        
        $durations = [];
        $totalDurations = [];

        foreach ($entryLogs as $employeeCode => $entryLog) {
            if ($entryLog && $exitLogs[$employeeCode]) {
                $entryTime = strtotime($entryLog->LogDate);
                $exitTime = strtotime($exitLogs[$employeeCode]->LogDate);

                // Calculate duration in seconds
                $durationSeconds = $exitTime - $entryTime;

                // Convert seconds to hours and minutes
                $durationHours = floor($durationSeconds / 3600); // Get whole hours
                $remainingSeconds = $durationSeconds % 3600; // Get remaining seconds after getting whole hours
                $durationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

                // Format the duration
                $formattedDuration = "$durationHours hrs $durationMinutes mins";

                // Store the duration for each employee
                $durations[$employeeCode] = $formattedDuration;

                // Add the duration to the total duration for the employee
                if (!isset($totalDurations[$employeeCode])) {
                    $totalDurations[$employeeCode] = $durationSeconds;
                } else {
                    $totalDurations[$employeeCode] += $durationSeconds;
                }
            } else {
                // No duration if either entry or exit log is missing
                $durations[$employeeCode] = null;
            }
        }

        // Convert total durations to formatted strings
        foreach ($totalDurations as $employeeCode => $totalDurationSeconds) {
            $totalDurationHours = floor($totalDurationSeconds / 3600); // Get whole hours
            $remainingSeconds = $totalDurationSeconds % 3600; // Get remaining seconds after getting whole hours
            $totalDurationMinutes = floor($remainingSeconds / 60); // Convert remaining seconds to minutes

            // Format the total duration
            $formattedTotalDuration = "$totalDurationHours hrs $totalDurationMinutes mins";

            // Update the total duration with the formatted string
            $totalDurations[$employeeCode] = $formattedTotalDuration;
        }

        // Calculate punch counts for each employee
        $punchCounts = $logsByEmployee->map->count();

        return [
            'entryLogs' => $entryLogs,
            'exitLogs' => $exitLogs,
            'punchcounts' => $punchCounts,
            'durations' => $durations,
            'employeePunchLogs' => $employeePunchLogs,
            
        ];
    }

    // public function missingLogEntries(Request $request)
    // {
    //     if($request->input('date')==null)
    //     {
    //         $date=Carbon::now()->format('Y-m-d');
           
    //     }
    //     else
    //     {
    //         $date = $request->input('date');
    //     }
    //     //dd($date);
    //     // Get the current month and year
    //     $currentMonth = Carbon::now()->month;
    //     $currentYear = Carbon::now()->year;

    //     // Retrieve log entries from the database for the specified date
    //     // $logs = DB::connection('mysql2')
    //     //     ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
    //     //     ->where('LogDate_Date', $date)
    //     //     ->select('EmployeeCode')
    //     //     ->distinct()
    //     //     ->groupBy('EmployeeCode')
    //     //     ->pluck('EmployeeCode')
    //     //     ->toArray();
    //     //     $logs = implode(',', $logs); // Convert the array to a comma-separated string
    //     //     $logs = is_array($logs) ? $logs : [$logs];
    //    // dd($logs);


       

    //         // Retrieve EmployeeCodes from the Staff table in the mysql connection
    //         $staffData = DB::table('Staff')
    //         ->whereNotIn('EmployeeCode',$logs)
    //         ->select('id', 'EmployeeCode', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
    //         ->get();
    //             //dd($staffData);
    //             // Return the data to the view
    //             return response()->json($staffData);
    // }
    // public function missingLogEntries(Request $request)
    // {
    //     if($request->input('date')==null)
    //     {
    //         $date=Carbon::now()->format('Y-m-d');
           
    //     }
    //     else
    //     {
    //         $date = $request->input('date');
    //     }

    //     // Get the current month and year
    //     $currentMonth = Carbon::now()->month;
    //     $currentYear = Carbon::now()->year;
    //     $logs = DB::connection('mysql2')
    //         ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
    //         ->where('LogDate_Date', $date)
    //         ->select('EmployeeCode')
    //         ->groupBy('EmployeeCode')
    //         ->pluck('EmployeeCode')
    //         ->toArray();
    //         $logs = implode(',', $logs); // Convert the array to a comma-separated string
        

    //         $staff = DB::connection('mysql')->table('Staff')->get();

            
    //         $staffData = [];
    //         foreach($logs as $l){
    //             foreach($staff as $s){
    //                 if($s->EmployeeCode==$l){
    //                     whereNotIn('EmployeeCode',$logs)
    //                     ->select('id', 'EmployeeCode', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
    //                     ->get();  
    //             }
    //         }
    //     }
    //     return response()->json($staffData);
     
    // }


        public function missingLogEntries(Request $request)
        {
            // Set the date to the current date if not provided
            $date = $request->input('date') ?? Carbon::now()->format('Y-m-d');

            // Get the current month and year
            $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;

            // Fetch the employee codes with logs on the specified date
            $logs = DB::connection('mysql2')
                ->table('DeviceLogs_' . $currentMonth . '_' . $currentYear)
                ->where('LogDate_Date', $date)
                ->pluck('EmployeeCode')
                ->toArray();

            // Fetch all staff records
            $staffData = DB::connection('mysql')->table('Staff')
                ->join('department_staff','department_staff.staff_id','=','staff.id')
                ->join('departments','departments.id','=','department_staff.department_id')
                ->whereNotIn('EmployeeCode', $logs)
                ->select('staff.id','departments.dept_shortname', 'EmployeeCode', DB::raw("CONCAT(fname, ' ', COALESCE(mname, ''), ' ', lname) AS full_name"))
                ->distinct('staff.id')
                ->orderBy('department_staff.department_id')->orderBy('staff.fname')
                ->get();

            return response()->json($staffData);
        }
}




    


