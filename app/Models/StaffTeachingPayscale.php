<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffTeachingPayscale extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }

    public function teachingPayscale()
    {
        return $this->belongsTo(TeachingPayscale::class);
    }
}
