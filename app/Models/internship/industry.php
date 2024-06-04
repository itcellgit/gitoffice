<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class industry extends Model
{
    public function spocs():HasMany
    {
        return $this->hasMany(spoc::class);
    }
}
