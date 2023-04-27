<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyEmployeeSalaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'month',
        'salary',
        'session',
        'employee_id',
    ];
    public function employee (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
