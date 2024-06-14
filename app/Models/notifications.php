<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;

class notifications extends Model
{
    use HasFactory;

    
    protected $fillable=['user_id','notification_title','notification_type','date','description'];

    public function user(): HasMany
    {
        return $this->hasMany(user::class);
    }

  
}
