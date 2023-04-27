<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Classes::class)
            ->using('classes_weekday')
            ->withPivot('classes_id','weekday_id')
            ->withTimestamps();
    }
}
