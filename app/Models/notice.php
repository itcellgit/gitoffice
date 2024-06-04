<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class notice extends Model
{
    use HasFactory;
    protected $fillable=['title','date','description','staff_type'];
    public function department(): BelongsToMany
    {
        return $this->belongsToMany(department::class);
    }
    public function user(): HasMany
    {
        return $this->hasMany(user::class);
    }
}
