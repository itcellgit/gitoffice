<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class staffshare extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','member_id','shares_id','amount','start_date','end_date','status'];
     public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
    public function staffshare_transactions():HasMany
    {
        return $this->hasMany(staffshare_transaction::class);
    }
}
