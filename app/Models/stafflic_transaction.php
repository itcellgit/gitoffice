<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class stafflic_transaction extends Model
{
    use HasFactory;
    protected $fillable=['stafflic_id','lic_id','month','dop'];
    public function stafflics():HasMany
    {
       return $this->hasMany(stafflic::class);
    }
    public function lics():HasMany
    {
       return $this->hasMany(lic::class);
    }
}
