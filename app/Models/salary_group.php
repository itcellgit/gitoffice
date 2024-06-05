<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class salary_group extends Model
{
    use HasFactory;
    public function salaryHeads():HasMany
    {
        return $this->hasMany(salary_head::class);
    }
 
}
