<?php

namespace App\Models\Non_Teaching;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\student_issue;
use App\Models\User;

class ntissue_timeline extends Model
{
    use HasFactory;
    protected $fillable=['date_of_interaction','interaction','status'];
    public function student_issue():BelongsTo
    {
        return $this->belongsTo(student_issue::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'status_updated_by');
    }

}
