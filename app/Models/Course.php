<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'time',
        'price',
        'duration',
        'number_of_lesson',
        'max_student',
        'description',
        'active',
    ];

    public function classes (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Classes::class);
    }
    public function lessons (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Lesson::class);
    }
    public function exams (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Exam::class, 'course_id', 'id');
    }
}
