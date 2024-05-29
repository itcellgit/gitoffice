<?php

namespace App\Models\PRINCIPAL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\staff;
use App\Models\student_issue;

class exam_section_issue extends Model
{
    use HasFactory;
    protected $fillable=['issues','remarks','category_name','staff_id'];
    public function staff():BelongsTo
    {
        
        return $this->belongsTo(staff::class);
    }

    public function student_issue():HasMany
    {
        return $this->hasMany(student_issue::class);
    }

}
