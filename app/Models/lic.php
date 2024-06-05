<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class lic extends Model
{
    use HasFactory;
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
    public function stafflics(): BelongsTo
    {
        return $this->belongsTo(stafflic::class,'stafflic_id');
    }
    public function stafflic_transactions(): BelongsTo
    {
        return $this->belongsTo(stafflic_transaction::class);
    }

}
