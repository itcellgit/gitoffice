<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class stafflic extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','policy_no','premium','start_date','end_date','status'];
     public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
    public function stafflic_transactions():HasMany
    {
        return $this->hasMany(stafflic_transaction::class);
    }
}
