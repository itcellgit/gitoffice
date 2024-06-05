<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class payscale_salary_head extends Model
{
    use HasFactory;
    // protected $fillable = ['salary_head_id','status'];
    protected $table='payscale_salary_head';
    // public function payscale(): HasMany
    // {
    //     return $this->hasMany(payscale::class);
    // }

}
