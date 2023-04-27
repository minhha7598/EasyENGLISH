<?php

namespace Database\Seeders;

use App\Models\StudentParent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parent = [
            ['name' => 'Tran Ngoc Lam', 'phone_number' => '0905123456'],
            ['name' => 'Nguyen Ngoc', 'phone_number' => '0905123444'],
            ['name' => 'Ha Thi Keo', 'phone_number' => '0935122322'],
            ['name' => 'Pham Thoai', 'phone_number' => '0905363654'],
            ['name' => 'Ha Minh Duoc', 'phone_number' => '0788569952'],
            ['name' => 'Tran Lam', 'phone_number' => '0768544652'],
            ['name' => 'Tran Tong', 'phone_number' => '0905144444'],
        ];
        StudentParent::query()->insert($parent);
    }
}
