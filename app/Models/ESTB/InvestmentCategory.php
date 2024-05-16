<?php

namespace App\Models\ESTB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ESTB\tdshead1;

class InvestmentCategory extends Model
{
    use HasFactory;
    protected $table = 'investment_categories';
    protected $fillable = ['tds_id','investment_type'];

    public function tdshead()
    {
        return $this->belongsTo(tdshead1::class,'tds_id','id');
    }
}
