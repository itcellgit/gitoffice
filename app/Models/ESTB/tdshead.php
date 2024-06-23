<?php

namespace App\Models\ESTB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ESTB\InvestmentCategory;
use App\Models\staff;

class tdshead extends Model
{
    use HasFactory;
    protected $table = 'tdsheads';
    protected $fillable = ["category","description","status"];
    
    public function InvestmentCategory()
    {
        return $this->hasMany(InvestmentCategory::class,"tds_id","id");
    }

    public function staff()
    {
        return $this->belongsToMany(staff::class, 'staff_tdsheads')
                    ->withPivot('amount', 'document', 'status');
    }
}
