<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
   use HasFactory;
    protected $table = 'Devices'; // Assuming table name is 'Devices'

    public function attendanceLogs()
    {
        // Assuming you have similar relationships for both in and out devices
        return $this->hasMany(AttendanceLog::class, 'InDeviceId', 'DeviceId');
    }
}

