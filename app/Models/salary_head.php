<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class salary_head extends Model
{
    use HasFactory;
    protected $fillable=['title','salary_group_id','salary_type','ptype','maximum','status'];
  
    public function salaryGroup():BelongsTo
    {
        return $this->belongsTo(salary_group::class);
    }
    public function salary_head_on():BelongsTo
    {
        return $this->belongsTo(salary_head::class,'ptype');
    }
    public function payscales():BelongsToMany
    {
        return $this->belongsToMany(payscale::class);
    }
}
