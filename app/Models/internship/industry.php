<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\department;
use App\Models\staff;




class industry extends Model
{
    public function spocs():HasMany
    {
        return $this->hasMany(spoc::class);
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
