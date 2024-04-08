<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daywise_Leave extends Model
{
    use HasFactory;
    protected $fillable=['leave_staff_application_id','leave_id','start'];
}
