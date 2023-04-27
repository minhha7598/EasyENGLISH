<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = [
            ['name' => 'Tran Ngoc Nguyen', 'sex' => 'Man', 'dob' => '1997-05-01', 'email' => 'tranngochuyhen@gmail.com', 'phone_number' => '0905123456', 'address' => 'Danang', 'department_id' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Pham Thanh Hung', 'sex' => 'Man','dob' => '1998-10-01', 'email' => 'phamthanhhungg@gmail.com', 'phone_number' => '0905123654', 'address' => 'Hoian', 'department_id' => '2', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Nguyen Thanh Uyen', 'sex' => 'Woman','dob' => '1993-05-11', 'email' => 'nguyenthanhuyen@gmail.com', 'phone_number' => '090512321', 'address' => 'Danang', 'department_id' => '2', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Nguyen Thi To Trinh', 'sex' => 'Woman','dob' => '1992-12-01', 'email' => 'nguyenthitotrinh@gmail.com', 'phone_number' => '0905124444', 'address' => 'Danang', 'department_id' => '3', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Chau Quang Dai', 'sex' => 'Man','dob' => '1995-04-01', 'email' => 'chauquangdai@gmail.com', 'phone_number' => '090545689', 'address' => 'Danang', 'department_id' => '3', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Ha Ho', 'sex' => 'Woman','dob' => '1989-05-01', 'email' => 'haho@gmail.com', 'phone_number' => '0905111148', 'address' => 'Danang', 'department_id' => '3', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Bui Thi Ha', 'sex' => 'Woman','dob' => '1993-01-01', 'email' => 'buithiha@gmail.com', 'phone_number' => '0905965874', 'address' => 'Danang', 'department_id' => '3', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
        ];
        Employee::query()->insert($employee);
    }
}
