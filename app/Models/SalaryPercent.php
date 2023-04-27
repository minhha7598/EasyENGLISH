<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPercent extends Model
{
    use HasFactory;
    protected $fillable = [
        'percent',
    ];
    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Classes::class)
        ->using('classes_salary_percent')
		->withPivot('classes_id','salary_percent_id')
            ->withTimestamps();
    }
}
