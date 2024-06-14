<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class staffloan extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','member_id','loan_type','loan_id','loan_amount','monthly_EMI','start_date','end_date','status'];
     public function staff():BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
    public function staffloan_transactions():HasMany
    {
        return $this->hasMany(staffloan_transaction::class);
    }
}
