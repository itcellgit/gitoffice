<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\department;
use App\Models\staff;

class interaction extends Model
{
    use HasFactory;

    public function student():BelongsTo
    {
        return $this->belongsTo(student::class);
    }

    public function spoc()
    {
        return $this->belongsTo(spoc::class);
    }
    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }
}
