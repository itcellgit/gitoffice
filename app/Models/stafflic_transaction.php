<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class stafflic_transaction extends Model
{
    use HasFactory;
    protected $fillable=['stafflic_id','month','years','dop','gst'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class);
    }
    public function stafflics():BelongsTo
    {
       return $this->belongsTo(stafflic::class);
    }
    
}
