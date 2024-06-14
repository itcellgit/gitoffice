<?php

namespace App\Models\HOD\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\department;



class student extends Model
{
    use HasFactory;

    protected $fillable = ['usn', 'name', 'batch', 'department_staff_id'];

    public function studentinternship():BelongsToMany
    {
        return $this->belongsToMany(studentinternship::class)->withPivot('id','studentinternship_id','student_id');
    }

    public function interaction():HasMany
    {
        return $this->hasMany(interaction::class);
    }

    public function student_studentinternship():HasMany
    {
        return $this->hasMany(student_studentinternship::class, 'student_id');
    }

    public function department()
    {
        return $this->belongsTo(department::class);
    }
}
