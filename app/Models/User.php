<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Ticketing\ticket;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function staff():HasOne
    {
        return $this->hasOne(staff::class);
    }
    public function tickets():HasMany
    {
        return $this->hasMany(ticket::class);
    }
    public function event(): BelongsToMany
    {
        return $this->belongsToMany(event::class)->withPivot('department_id');
    }

    public function notice(): BelongsToMany
    {
        return $this->belongsToMany(notice::class)->withPivot('department_id');
    }

    public function grievience_category(): HasMany
    {
        return $this->hasMany(grievience_category::class);
    }
   
}
