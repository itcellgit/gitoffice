<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biometric extends Model
{
    use HasFactory;
    protected $connection = 'mysql2'; // Second database connection
    protected $table = 'employees';
    
}
