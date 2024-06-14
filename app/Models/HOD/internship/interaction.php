<?php

namespace App\Models\HOD\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
