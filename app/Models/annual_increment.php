<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class annual_increment extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','wef','additional_days','gc','reason','basic'];
    public function staff():BelongsTo
    {
        return $this->belongsTo(annualIncrement::class);
    }
}
