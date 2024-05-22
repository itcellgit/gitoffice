<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grading_staff extends Model
{
    use HasFactory;
    public function staff()
    {
        return $this->belongsTo(staff::class);
    }
    protected $fillable = ['staff_id', 'year', 'month', 'grade'];

    
}
