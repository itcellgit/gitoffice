<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    use HasFactory;

    //protected $table = 'attendancelogs'; // Assuming table name is 'AttendanceLogs'

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'UserId', 'EmployeeCode');
    }

    public function inDevice()
    {
        return $this->belongsTo(Device::class, 'InDeviceId', 'DeviceId');
    }

    public function outDevice()
    {
        return $this->belongsTo(Device::class, 'OutDeviceId', 'DeviceId');
    }
}
