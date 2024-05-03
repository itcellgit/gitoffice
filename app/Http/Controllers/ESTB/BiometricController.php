<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiometricController extends Controller
{
    public function biometric_data()
    {
        // Get current month and year
        $currentMonth = date('n');
        $currentYear = date('Y');

        // // Construct table name
         $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

        // // Retrieve data from the 'mysql2' database
        $externalData = DB::connection('mysql2')
    ->table($tableName) // Dynamically using the variable $tableName
    ->select("$tableName.logDate as logDate", 'devices.DeviceFname as DeviceName', 'employees.EmployeeName as EmployeeName')
    ->join('devices', "$tableName.DeviceId", '=', 'devices.DeviceId')
    ->join('employees', "$tableName.EmployeeCode", '=', 'employees.EmployeeCode')
    ->orderBy("$tableName.logDate", 'desc')->orderBy("employees.EmployeeName") // Sorting by logDate in descending order
    ->get();
    //dd($externalData);
      $entry_exit=  $this->filterEntryExitLogs('5','2024');
      dd($entry_exit);
    // Return the view with the retrieved data
     return view('ESTB.Biometric.biometric_data', compact('externalData'));
    }



    public function filterEntryExitLogs($currentMonth, $currentYear)
    {
        // Generate table name based on current month and year
        $tableName = "DeviceLogs_" . $currentMonth . "_" . $currentYear;

        // Retrieve log entries from the database
        $logs = DB::connection('mysql2')
            ->table($tableName)
            ->where('LogDate_Date', '2024-05-02')
            ->where('EmployeeCode', 207)
            ->orderBy('LogDate')
            ->get();

        // Initialize arrays for entry and exit logs
        $entryLogs = [];
        $exitLogs = [];
        $logCounter = []; // Track the number of logs for each employee on a given day

        // Iterate through log entries
        foreach ($logs as $index => $log) {
            $employeeCode = $log->EmployeeCode;
            $logDate = Carbon::parse($log->LogDate)->format('Y-m-d'); // Extract date part

            // Increment log counter
            $logCounter[$employeeCode][$logDate] = isset($logCounter[$employeeCode][$logDate]) ? $logCounter[$employeeCode][$logDate] + 1 : 1;

            // If entry log doesn't exist for the employee on the same day, store it
            if (!isset($entryLogs[$employeeCode][$logDate])) {
                $entryLogs[$employeeCode][$logDate] = $log;

                // Set exit log as null until the logs become even
                $exitLogs[$employeeCode][$logDate] = null;
            }

            // Update exit log with the details of the last log for the day
            $currentLogDate = Carbon::parse($log->LogDate)->format('Y-m-d');
            if ($index == count($logs) - 1 || Carbon::parse($logs[$index + 1]->LogDate)->format('Y-m-d') !== $currentLogDate) {
                // Check if the log count is even
                if ($logCounter[$employeeCode][$logDate] % 2 === 0) {
                    // Check the time difference with the previous log, if available
                    if ($index > 0) {
                        $previousLog = $logs[$index - 1];
                        $timeDifference = Carbon::parse($log->LogDate)->diffInSeconds(Carbon::parse($previousLog->LogDate));
                        $thresholdInSeconds = 30; // Adjust threshold as needed

                        // If time difference is greater than the threshold, update exit log
                        if ($timeDifference > $thresholdInSeconds) {
                            $exitLogs[$employeeCode][$logDate] = $log;
                        }
                    } else {
                        $exitLogs[$employeeCode][$logDate] = $log;
                    }
                }
            }
        }

        // Process and return the filtered logs
        $filteredEntryLogs = [];
        $filteredExitLogs = [];
        foreach ($entryLogs as $employeeCode => $entryLogsByDate) {
            foreach ($entryLogsByDate as $logDate => $entryLog) {
                // Get the exit log for the same day
                $exitLog = $exitLogs[$employeeCode][$logDate] ?? null;

                // Only consider entry and exit events for the same day
                if ($exitLog && Carbon::parse($exitLog->LogDate)->format('Y-m-d') == $logDate) {
                    $filteredEntryLogs[] = $entryLog;
                    $filteredExitLogs[] = $exitLog;
                } else {
                    // If no corresponding exit log found, keep exit time as null
                    $filteredEntryLogs[] = $entryLog;
                    $filteredExitLogs[] = null;
                }
            }
        }

        return [
            'entryLogs' => $filteredEntryLogs,
            'exitLogs' => $filteredExitLogs
        ];
    }


}



