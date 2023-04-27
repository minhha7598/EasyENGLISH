<?php

namespace Database\Seeders;

use App\Models\RegularExpenses;
use App\Models\WeekDay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegularExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regularExpenses = [
            ['name' => 'SMS','type' => 'Fixed','amount' => '5000000'],
            ['name' => 'Living','type' => 'Variable','amount' => '0000000000'],
            ['name' => 'Employee','type' => 'Variable','amount' => '0000000000'],
            ['name' => 'Rent','type' => 'Fixed','amount' => '15000000'],
        ];
        RegularExpenses::query()->insert($regularExpenses);
    }
}
