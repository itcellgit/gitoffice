<?php

namespace App\Models\ESTB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxSlab extends Model
{
    use HasFactory;

    protected $table = 'tax_slabs';

    public function taxHeads()
    {
        return $this->belongsTo(TaxHeads::class,'regime_id','id');
    }
}
