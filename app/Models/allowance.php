<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class allowance extends Model
{
    use HasFactory;
    public function designations():BelongsTo{
        return $this->belongsTo(designation::class);
    }
    public function staff():BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('id','staff_id','allowance_id','month','year','status');
    }
}
