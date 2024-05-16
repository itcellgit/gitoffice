<?php

namespace App\Models\ESTB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ESTB\InvestmentCategory;

class tdshead1 extends Model
{
    use HasFactory;
    protected $table = 'tdsheads';
    protected $fillable = ["category","description","status"];
    
    public function InvestmentCategory()
    {
        return $this->hasMany(InvestmentCategory::class,"tds_id","id");
    }
}
