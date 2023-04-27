<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionPercent extends Model
{
    use HasFactory;
    protected $fillable = [
        'percent',
    ];
    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Classes::class)
            ->using('classes_commission_percent')
            ->withPivot('classes_id','commission_percent_id')
            ->withTimestamps();
    }
}
