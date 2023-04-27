<?php

namespace Database\Seeders;


use App\Models\SalaryPercent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaryPercentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salaryPercent = [
            ['percent' => '0.3'],
            ['percent' => '0.35'],
            ['percent' => '0.4'],
            ['percent' => '0.5'],
            ['percent' => '0.55'],
        ];
        SalaryPercent::query()->insert($salaryPercent);
    }
}
