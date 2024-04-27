<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employees'; // Assuming table name is 'Employees'

    public function attendanceLogs()
    {
        return $this->hasMany(AttendanceLog::class, 'UserId', 'EmployeeCode');
    }
}
