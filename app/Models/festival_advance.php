<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class festival_advance extends Model
{
    use HasFactory;
    protected $fillable=['staff_id','date_of_application','date_of_disbursement','amount','emi','start_date','end_date '];
    public function staff():BelongsTo
    {
        return $this->belongsTo(FestivalAdvance::class);
    }
}
