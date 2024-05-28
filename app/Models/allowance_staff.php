<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allowance_staff extends Model
{
    use HasFactory;
    protected $fillable=['staff_id'];

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }

    public function allowance()
    {
        return $this->belongsTo(allowance::class);
    }
}
