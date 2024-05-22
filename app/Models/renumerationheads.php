<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renumerationheads extends Model
{
    use HasFactory;
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
    
    protected $fillable = [
        'staff_id', 'renumeration_head', 'date_of_disbursement', 'amount'
    ];

    
}
