<?php

namespace App\Models\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\department;
use App\Models\staff;

class studentinternship extends Model
{
    public function industry():BelongsTo
    {
        return $this->belongsTo(industry::class);
    }



    public function spoc():BelongsTo
    {
        return $this->belongsTo(spoc::class);
    }



    public function student():BelongsToMany
    {
        return $this->belongsToMany(student::class)->withPivot('id','studentinternship_id','student_id');
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
