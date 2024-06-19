<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\department;
use App\Models\staff;


class spoc extends Model
{
    public function industry():BelongsTo
    {
        return $this->belongsTo(industry::class);
    }

    public function interaction():HasMany
    {
        return $this->hasMany(interaction::class);
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
