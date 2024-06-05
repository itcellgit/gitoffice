<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class payscale extends Model
{
    use HasFactory;
    public function salary_head():BelongsToMany
    {
        return $this->belongsToMany(salary_head::class, 'payscale_salary_head')->withPivot('id','payscale_id','salary_head_id','start_date','end_date','status');
    }
    // public function payscalesalaryhead(): BelongsToMany
    // {
    //     return $this->belongsToMany(payscale_salary_head::class);
    // }
    
}
