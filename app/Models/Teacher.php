<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'email',
        'phone_number',
        'address',
        'is_foreigner',
        'date_of_hire',
        'description',
        'active',
    ];
    public function classes (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Classes::class);
    }
    public function monthlyTeacherSalaries (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MonthlyTeacherSalaries::class);
    }
    public function swapClasses (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SwapClasses::class);
    }
}
