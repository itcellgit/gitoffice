<?php

namespace App\Models\HOD\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

}
