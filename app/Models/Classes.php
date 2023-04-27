<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'classroom_id',
        'teacher_id',
        'course_id',
        'in_time',
        'out_time',
        'date_of_start',
        'date_of_finish',
        'active',
        'is_broker',
    ];
    public function teacher (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
    public function classroom (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    public function course (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function swapClasses (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SwapClasses::class);
    }
    public function classStudents (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClassStudent::class);
    }
    public function salaryPercents(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(SalaryPercent::class)
            ->using('classes_salary_percent')
            ->withPivot('classes_id','salary_percent_id')
            ->withTimestamps();
    }
    public function commissionPercents(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(CommissionPercent::class)
            ->using('classes_commission_percent')
            ->withPivot('classes_id','commission_percent_id')
            ->withTimestamps();
    }
    public function brokers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Broker::class)
            ->using('broker_classes')
            ->withPivot('classes_id','broker_id', 'student_name', 'is_payment')
            ->withTimestamps();
    }
    public function weekdays(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WeekDay::class)
            ->using('classes_weekday')
            ->withPivot('classes_id','weekday_id')
            ->withTimestamps();
    }
    public function dates(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Date::class)
            ->using('classes_date')
            ->withPivot('classes_id','date_id','is_swap','active','reason')
            ->withTimestamps();
    }
}
