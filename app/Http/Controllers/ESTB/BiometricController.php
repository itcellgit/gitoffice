<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiometricController extends Controller
{
    public function biometric_data(Request $request)
    {
        $currentMonth="";
        $currentYear="";
        $date="";
        if ($request->filled('date'))
         {
            $date=$request->date;
          $currentMonth=Carbon::parse($date)->month;
          $currentYear=Carbon::parse($date)->year;

         }
         else
         {
            $currentMonth = date('n');
            $currentYear = date('Y');
            $date=Carbon::now()->format('Y-m-d');
           // dd($date);
         }
        // Get current month and year


        // Construct table name
        $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

        // Retrieve data from the 'mysql2' database
        $externalData = DB::connection('mysql2')
            ->table($tableName) // Dynamically using the variable $tableName
            ->select(
                "$tableName.logDate as logDate",
                'devices.DeviceFname as DeviceName',
                'employees.EmployeeName as EmployeeName',
                "$tableName.EmployeeCode as EmployeeCode" // Include EmployeeCode in the SELECT query
            )
            ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
            ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
            ->orderBy("$tableName.logDate", 'desc')
            ->orderBy("employees.EmployeeName") // Sorting by logDate in descending order
            ->get();

            // $staff_biometric=DB::connection('mysql2')->table('biometric_data.'.$tableName.' as bd')
            // ->join('biometric_data.devices as d', "bd.DeviceId", '=', 'd.DeviceId')
            // ->join('gitoffice.staff as gos','bd.EmployeeCode','=','gos.EmployeeCode')
            // ->select("db.logDate as logDate",
            // 'd.DeviceFname as DeviceName', "bd.EmployeeCode as EmployeeCode",
            // (DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name")))->get();
            //     //dd($staff_biometric);

        // Filter entry and exit logs
        $entry_exit = $this->filterEntryExitLogs($currentMonth, $currentYear, $date, $externalData);
        $employeePunchLogs = $entry_exit['employeePunchLogs']; 
      // dd($employeePunchLogs[728][0]->LogDate);
        // Return the view with the retrieved data
        return view('ESTB.Biometric.biometric_data', compact('externalData', 'entry_exit', 'employeePunchLogs'));
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

    //     // Initialize arrays for entry and exit logs
    //     $entryLogs = [];
    //     $exitLogs = [];

    //     // Group logs by employee code
    //     $logsByEmployee = $logs->groupBy('EmployeeCode');

    //     // Iterate through each employee's logs
    //     foreach ($logsByEmployee as $employeeCode => $employeeLogs) {
    //         // Sort employee logs by log date
    //         $sortedLogs = $employeeLogs->sortBy('logDate');

    //         // Set the first log as the entry log and the last log as the exit log
    //         $entryLogs[$employeeCode] = $sortedLogs->first();
    //         $exitLogs[$employeeCode] = $sortedLogs->last();
    //         $employeepunchcount[$employeeCode]=$employeeLogs->count();
    //         $employeeduration[$employeeCode]=7;
    //         // If there's only one log for the employee, set exit log as null
    //         if ($employeeLogs->count() === 1) {
    //             $exitLogs[$employeeCode] = null;
    //         }
    //     }


    //     return [
    //         'entryLogs' => $entryLogs,
    //         'exitLogs' => $exitLogs,
    //         'punchcounts'=>$employeepunchcount,
    //         'durations'=>$employeeduration
    //     ];
    // }

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
        
        
           //dd($employeePunchLogs);

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
      //  dd($employeePunchLogs);

        
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

        // Now $durations contains individual durations for each employee,




        // Calculate punch counts for each employee
        $punchCounts = $logsByEmployee->map->count();

        return [
            'entryLogs' => $entryLogs,
            'exitLogs' => $exitLogs,
            'punchcounts' => $punchCounts,
            'durations' => $durations,
            'employeePunchLogs' => $employeePunchLogs
        ];
    }
    
}
