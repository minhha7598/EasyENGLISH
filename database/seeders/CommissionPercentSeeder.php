<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommissionPercent;
class CommissionPercentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commissionPercent = [
            ['percent' => '0.03'],
            ['percent' => '0.05'],
            ['percent' => '0.1'],
            ['percent' => '0.15'],
            ['percent' => '0.2'],
        ];
        CommissionPercent::query()->insert($commissionPercent);
    }
}
