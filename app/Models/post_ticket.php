<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 



class post_ticket extends Model
{
    use HasFactory;
    protected $fillable =['description','attachment'];
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(ticket::class, 'ticket_id','id');
    }

}
