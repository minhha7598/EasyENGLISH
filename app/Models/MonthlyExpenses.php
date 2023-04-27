<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyExpenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'month',
        'regular_expenses_id',
        'amount',
    ];
    public function regularExpenses (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RegularExpenses::class);
    }
}
