<?php

namespace App\Models\HOD\internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
}
