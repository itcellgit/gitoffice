<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class department extends Model
{
    use HasFactory,Sortable;
    protected $fillable=['dept_name','dept_shortname','yoe','end_date'];
    public $sortable =['dept_name','dept_shortname','yoe'];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(staff::class)->withPivot('start_date','end_date','status');
    }

    public function event(): BelongsToMany
    {
        return $this->belongsToMany(event::class)->withPivot('department_id');
    }

    public function notice(): BelongsToMany
    {
        return $this->belongsToMany(notice::class)->withPivot('department_id');
    }

   
   
 }
