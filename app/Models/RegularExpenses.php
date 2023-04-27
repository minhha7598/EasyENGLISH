<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularExpenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'amount',
    ];
    public function monthlyExpenses (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MonthlyExpenses::class);
    }
}
