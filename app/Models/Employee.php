<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'email',
        'phone_number',
        'address',
        'date_of_hire',
        'description',
        'active',
        'department_id',
    ];
    public function department (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function monthlyEmployeeSalaries (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MonthlyEmployeeSalaries::class);
    }
    public function dates(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Date::class)
            ->using('date_employee')
            ->withPivot('employee_id','date_id','active','reason')
            ->withTimestamps();
    }
}
