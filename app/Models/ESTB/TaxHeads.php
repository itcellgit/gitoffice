<?php

namespace App\Models\ESTB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxHeads extends Model
{
    use HasFactory;
    protected $table = 'tax_heads';

    public function taxSlabs()
    {
        return $this->hasMany(TaxSlab::class,'regime_id','id');
    }

    public function staff()
    {
        return $this->belongsToMany(staff::class, 'staff_taxregime');
    }
}
