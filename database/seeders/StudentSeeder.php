<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            ['name' => 'Que Chi', 'sex' => 'Woman','dob' => '1989-05-01', 'email' => 'quechi@gmail.com', 'phone_number' => '0905111148', 'address' => 'Danang', 'student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Dieu Anh', 'sex' => 'Woman', 'dob' => '1997-05-01', 'email' => 'dieuanh@gmail.com', 'phone_number' => '0905123856', 'address' => 'Danang','student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Quynh Anh', 'sex' => 'Woman','dob' => '1998-05-01', 'email' => 'quynhanh@gmail.com', 'phone_number' => '0905127754', 'address' => 'Danang','student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Nguyen Anh', 'sex' => 'Woman','dob' => '1993-05-11', 'email' => 'nguyenanh@gmail.com', 'phone_number' => '090512301', 'address' => 'Danang','student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Ngoc Anh', 'sex' => 'Woman','dob' => '1992-05-01', 'email' => 'ngocanh@gmail.com', 'phone_number' => '0905124445', 'address' => 'Danang','student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Minh Chau', 'sex' => 'Woman','dob' => '1995-04-01', 'email' => 'minhchau@gmail.com', 'phone_number' => '090540689', 'address' => 'Danang', 'student_parent_id' => '3', 'description' => 'Not normal'],
            ['name' => 'Ngoc Diep', 'sex' => 'Woman','dob' => '1993-01-01', 'email' => 'ngocdiep@gmail.com', 'phone_number' => '0905965875', 'address' => 'Danang', 'student_parent_id' => '2','description' => 'Good'],
            ['name' => 'Ngoc Bich', 'sex' => 'Woman', 'dob' => '1997-05-01', 'email' => 'ngocbich@gmail.com', 'phone_number' => '0777522145', 'address' => 'Danang', 'student_parent_id' => '7','description' => 'Good'],
            ['name' => 'Thanh Huong', 'sex' => 'Woman','dob' => '1998-11-01', 'email' => 'thanhhuong@gmail.com', 'phone_number' => '0905783654', 'address' => 'Hoian', 'student_parent_id' => '7','description' => 'Good'],
            ['name' => 'My Duyen', 'sex' => 'Woman','dob' => '1993-05-11', 'email' => 'myduyen@gmail.com', 'phone_number' => '090502321', 'address' => 'Danang', 'student_parent_id' => '2','description' => 'Good'],
            ['name' => 'Linh Dan', 'sex' => 'Woman','dob' => '1992-11-01', 'email' => 'linhdan@gmail.com', 'phone_number' => '0905124454', 'address' => 'Danang', 'student_parent_id' => '3','description' => 'Good'],
            ['name' => 'Van Khanh', 'sex' => 'Man','dob' => '1995-04-01', 'email' => 'vankhanh@gmail.com', 'phone_number' => '090545689', 'address' => 'Danang', 'student_parent_id' => '5','description' => 'Not normal'],
            ['name' => 'Anh Thu', 'sex' => 'Woman','dob' => '1989-05-01', 'email' => 'anhthu@gmail.com', 'phone_number' => '0905112148', 'address' => 'Danang', 'student_parent_id' => '2', 'description' => 'Individual'],
            ['name' => 'Hai Yen', 'sex' => 'Woman','dob' => '1993-01-01', 'email' => 'haiyen@gmail.com', 'phone_number' => '0905965874', 'address' => 'Danang', 'student_parent_id' => '3', 'description' => 'Good'],
            ['name' => 'Cat Tuong', 'sex' => 'Man', 'dob' => '1997-05-01', 'email' => 'cattuong2@gmail.com', 'phone_number' => '0905223456', 'address' => 'Danang', 'student_parent_id' => '2','description' => 'Good'],
            ['name' => 'Kha Han', 'sex' => 'Woman','dob' => '1998-08-01', 'email' => 'khahan@gmail.com', 'phone_number' => '0905193654', 'address' => 'Danang', 'student_parent_id' => '5','description' => 'Individual'],
            ['name' => 'Cat Tuong', 'sex' => 'Man','dob' => '1993-05-11', 'email' => 'cattuong@gmail.com', 'phone_number' => '090510321', 'address' => 'Danang', 'student_parent_id' => '4','description' => 'Good'],
            ['name' => 'Thanh Cong', 'sex' => 'Man','dob' => '1992-10-01', 'email' => 'thanhcong@gmail.com', 'phone_number' => '0905124844', 'address' => 'Danang', 'student_parent_id' => '4','description' => 'Individual'],
            ['name' => 'Trung Dung', 'sex' => 'Man','dob' => '1996-04-01', 'email' => 'trungdung@gmail.com', 'phone_number' => '090545989', 'address' => 'Danang', 'student_parent_id' => '3', 'description' => 'Not normal'],
            ['name' => 'Tai Duc', 'sex' => 'Man','dob' => '1989-05-01', 'email' => 'taiduc@gmail.com', 'phone_number' => '0905114148', 'address' => 'Danang', 'student_parent_id' => '6', 'description' => 'Individual'],
            ['name' => 'Manh Hung', 'sex' => 'Man','dob' => '1993-01-01', 'email' => 'manhhung@gmail.com', 'phone_number' => '0905965974', 'address' => 'Danang', 'student_parent_id' => '6', 'description' => 'Individual'],
        ];
        Student::query()->insert($student);
    }
}
