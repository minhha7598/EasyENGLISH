<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyTeacherSalaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'month',
        'salary',
        'session',
        'teacher_id',
    ];
    public function teacher (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
