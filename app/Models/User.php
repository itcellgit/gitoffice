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
use App\Enums\UserRoles;
use App\Http\Models\HOD\issue_timeline;
use App\Http\Models\Non_Teaching\ntissue_timeline;
use Impersonate;

// use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $fillable = [
        'name', 'email', 'password', 'role', 'is_impersonating', 'impersonator_id'
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


    protected $casts = [
        'is_impersonating' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    public function isSuperAdmin()
    {
        return $this->role === UserRoles::SU->value;
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

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
   
    public function issue_timeline():HasMany
    {
        return $this->hasMany(issue_timeline::class, 'status_updated_by');
    }

    public function ntissue_timeline():HasMany
    {
        return $this->hasMany(ntissue_timeline::class, 'status_updated_by');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
   
}
