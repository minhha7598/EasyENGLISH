<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher = [
            ['name' => 'Tommy', 'sex' => 'Man', 'dob' => '1997-05-01', 'email' => 'tommy@gmail.com', 'phone_number' => '0905123456', 'address' => 'Danang', 'is_foreigner' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Serious'],
            ['name' => 'Ha Minh Hung', 'sex' => 'Man', 'dob' => '1998-11-01', 'email' => 'haminhhung@gmail.com', 'phone_number' => '0905123654', 'address' => 'Hoian', 'is_foreigner' => '0', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'David Louis', 'sex' => 'Man', 'dob' => '1993-05-11', 'email' => 'davidlouis@gmail.com', 'phone_number' => '090512321', 'address' => 'Danang', 'is_foreigner' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Nguyen Thi Thao', 'sex' => 'Woman', 'dob' => '1992-12-01', 'email' => 'nguyenthithao@gmail.com', 'phone_number' => '0905124444', 'address' => 'Danang', 'is_foreigner' => '0', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Serious'],
            ['name' => 'Hones Kong', 'sex' => 'Man', 'dob' => '1995-04-01', 'email' => 'honeskhong@gmail.com', 'phone_number' => '090545689', 'address' => 'Danang', 'is_foreigner' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Serious'],
            ['name' => 'Acacia', 'sex' => 'Woman', 'dob' => '1989-05-01', 'email' => 'acaia@gmail.com', 'phone_number' => '0905111148', 'address' => 'Danang', 'is_foreigner' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Adelie', 'sex' => 'Woman', 'dob' => '1993-01-01', 'email' => 'adelie@gmail.com', 'phone_number' => '0905965874', 'address' => 'Danang', 'is_foreigner' => '1', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Ha Thi Minh Tram', 'sex' => 'Woman', 'dob' => '1996-03-11', 'email' => 'hathiminhtram@gmail.com', 'phone_number' => '0905123658', 'address' => 'Quangnam', 'is_foreigner' => '0', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
            ['name' => 'Tran Ngoc Son', 'sex' => 'Man', 'dob' => '1998-02-01', 'email' => 'tranngocson@gmail.com', 'phone_number' => '0905888654', 'address' => 'Quangnam', 'is_foreigner' => '0', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Serious'],
            ['name' => 'Pham Thi Hong', 'sex' => 'Woman', 'dob' => '1998-02-22', 'email' => 'phamthihong@gmail.com', 'phone_number' => '0905222635', 'address' => 'Danang', 'is_foreigner' => '0', 'date_of_hire' => '2023-04-24 00:00:00', 'description' => 'Friendly'],
        ];
        Teacher::query()->insert($teacher);
    }
}
