<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class teaching_payscale extends Model
{
    use HasFactory;
    protected $fillable=['payscale_title','basepay','maxpay','designation_id','agp','da','hra','cca','wef'];
    public function designations(): BelongsTo
    {
        return $this->belongsTo(designation::class);
    }
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status');
    }
    public function staffTeachingPayscale()
    {
        return $this->hasMany(StaffTeachingPayscale::class);
    }
}
