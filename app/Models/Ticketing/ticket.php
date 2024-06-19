<?php

namespace App\Models\Ticketing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 



use App\Models\post_ticket;
use App\Models\staff;



class ticket extends Model
{
    use HasFactory;
    protected $fillable =['id','title','description','attachment','user_id'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function post_ticket(): HasMany
    {
        return $this->hasmany(post_ticket::class, 'ticket_id','id');

    }
    public function staff()

{

    return $this->belongsTo(Staff::class, 'staff_id');

}
}
