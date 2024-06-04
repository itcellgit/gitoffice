<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;



class student extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function studentinternship():BelongsToMany
    {
        return $this->belongsToMany(studentinternship::class)->withPivot('id','studentinternship_id','student_id');
    }

    public function interaction():HasMany
    {
        return $this->hasMany(interaction::class);
    }
}
