<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Kyslik\ColumnSortable\Sortable;

class designation extends Model
{
    use HasFactory, Sortable;
    protected $fillable=['design_name','isadditional','emp_type','isvacational'];
    //public $sortable =['design_name','isadditional','emp_type','isvacational'];
    public function ntpayscales(): BelongsToMany
    {
        return $this->belongsToMany(ntpayscale::class)->withPivot('start_date','end_date','status','gcr');
    }
    public function ntcpayscales():BelongsToMany
    {
        return $this->belongsToMany(ntcpayscale::class)->withPivot('start_date','end_date','status','gcr');
    }
    public function teaching_payscales():HasMany
    {
        return $this->hasMany(teaching_payscale::class);
    }
    public function allowances():HasMany
    {
        return $this->hasMany(allowance::class);
    }
    public function staff():HasMany
    {
        return $this->hasMany(staff::class)->withPivot('start_date','end_date','status');
    }
}
