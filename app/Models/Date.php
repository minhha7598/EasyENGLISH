<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'is_holiday'
    ];
    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Classes::class)
            ->using('classes_date')
            ->withPivot('classes_id','date_id','is_swap','active','reason')
            ->withTimestamps();
    }
    public function employees(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Employee::class)
            ->using('date_employee')
            ->withPivot('employee_id','date_id','active','reason')
            ->withTimestamps();
    }
}
