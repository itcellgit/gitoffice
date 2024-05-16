<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade_mapping extends Model
{
    use HasFactory;
    public function allowances()
    {
        return $this->belongsTo(allowances::class, 'allowance_id');
    }
    protected $fillable = ['grade','autonomous_allowance_id'];
}
