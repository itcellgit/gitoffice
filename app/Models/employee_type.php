<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class employee_type extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','employee_type','status'];
    
    public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
   
}
