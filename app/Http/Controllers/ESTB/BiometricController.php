<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\AttendanceLog;
use App\Models\Employee;
use Carbon\Carbon;
class BiometricController extends Controller
{
    public function biometric_data()
    {
        // Retrieve data from the 'mysql2' database
        $externalData = DB::connection('mysql2')
            ->table('attendancelogs')
            ->select(
                'employees.EmployeeName',
                'attendancelogs.InTime',
                'inDevice.DeviceFName AS InDeviceName',
                'attendancelogs.OutTime',
                'outDevice.DeviceFName AS OutDeviceName',
                'attendancelogs.Duration'
            )
            ->join('employees', 'attendancelogs.EmployeeId', '=', 'employees.EmployeeId')
            ->leftJoin('devices AS inDevice', 'attendancelogs.InDeviceId', '=', 'inDevice.DeviceId')
            ->leftJoin('devices AS outDevice', 'attendancelogs.OutDeviceId', '=', 'outDevice.DeviceId')
            ->where ('attendancelogs.InTime', '>=', '2024-04-01')
            ->orderBy('attendancelogs.InTime', 'desc')
            ->get();

            // ->select(
            //     'employees.EmployeeName',
            //     'attendancelogs.InTime',
            //     'inDevice.DeviceFName AS InDeviceName',
            //     'attendancelogs.OutTime',
            //     'outDevice.DeviceFName AS OutDeviceName',
            //     'attendancelogs.Duration',
            //     'inDevice.DeviceId AS InDeviceId',
            //     'outDevice.DeviceId AS OutDeviceId'
            // )
            // ->join('employees', 'attendancelogs.EmployeeId', '=', 'employees.EmployeeId')
            // ->leftJoin('devices AS inDevice', 'attendancelogs.InDeviceId', '=', 'inDevice.DeviceId')
            // ->leftJoin('devices AS outDevice', 'attendancelogs.OutDeviceId', '=', 'outDevice.DeviceId')
            // ->where('attendancelogs.InTime', '>=', '2024-04-01')
            // ->orderBy('attendancelogs.InTime', 'desc')
            // ->get();


        return view('ESTB.Biometric.biometric_data', compact('externalData'));
    }
}









