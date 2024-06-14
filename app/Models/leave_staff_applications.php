<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class leave_staff_applications extends Model
{
    use HasFactory;
    protected $fillable=['leave_id','cl_type','staff_id','alternate','additional_alternate','start','end'];
    public function leave_staff_application():BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
