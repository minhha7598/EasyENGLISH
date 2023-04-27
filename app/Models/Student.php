<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'email',
        'phone_number',
        'address',
        'description',
        'active',
        'parent_id',
        'sex'
    ];

    public function studentParent (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(StudentParent::class);
    }
    public function broker (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }
    public function classStudents (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClassStudent::class);
    }
}
