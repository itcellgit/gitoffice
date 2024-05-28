<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\HOD\exam_section_issue;
use App\Models\staff;
use App\Models\HOD\issue_timeline;
use App\Models\Non_Teaching\ntissue_timeline;




class student_issue extends Model
{
    use HasFactory;
    // public $sortable= ['usn'];
    protected $fillable=['usn','exam_section_issue_id','other_issue','description'];
    public function exam_section_issue():BelongsTo
    {
        return $this->belongsTo(exam_section_issue::class);
    }

    public function issue_timeline():HasMany
    {
        return $this->hasMany(issue_timeline::class,'student_issue_id');
    }
    
    public function staff():HasMany
    {
        return $this->hasMany(staff::class);
    }

    public function ntissue_timeline():HasMany
    {
        return $this->hasMany(ntissue_timeline::class,'student_issue_id');
    }

}
