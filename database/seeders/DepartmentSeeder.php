<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds,
     */
    public function run(): void
    {
        $department = [
            ['name' => 'Accountant', 'min_salary' => '4000000.00', 'max_salary' => '10000000.00'],
            ['name' => 'Security', 'min_salary' => '3000000.00', 'max_salary' => '10000000.00'],
            ['name' => 'Receptionist', 'min_salary' => '3000000.00', 'max_salary' => '10000000.00'],
        ];
        Department::query()->insert($department);
    }
}
