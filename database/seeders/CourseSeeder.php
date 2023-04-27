<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = [
            ['name' => 'TOEIC-V001', 'price' => '2500000', 'duration' => '2h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Vietnam teacher'],
            ['name' => 'TOEIC-F001', 'price' => '3500000', 'duration' => '2h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Foreigner teacher'],
            ['name' => 'IELTS-V001', 'price' => '5500000', 'duration' => '2h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Vietnam teacher'],
            ['name' => 'IELTS-F001', 'price' => '7500000', 'duration' => '2h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Foreigner teacher'],
            ['name' => 'IELTS-F002', 'price' => '7500000', 'duration' => '2h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Foreigner teacher'],
            ['name' => 'COMMUNICATION-V001', 'price' => '2500000', 'duration' => '2,5h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Vietnam teacher'],
            ['name' => 'COMMUNICATION-F001','price' => '3500000', 'duration' => '2,5h - 3months', 'number_of_lesson' => '10', 'max_student' => '10', 'description' => 'Vietnam teacher'],
        ];
        Course::query()->insert($course);

        for ($i = 1; $i < 8; $i++)
        {
            $course = Course::query()->find($i);
            //Exam
            $course->exams()->createMany([
                ['name' => 'Regular exam'],
                ['name' => 'Mid-term'],
                ['name' => 'Fina-term'],
            ]);
            //Lesson
            $course->lessons()->createMany([
                ['name' => 'Lesson 1'],
                ['name' => 'Lesson 2'],
                ['name' => 'Lesson 3'],
                ['name' => 'Lesson 4'],
                ['name' => 'Lesson 5'],
                ['name' => 'Lesson 6'],
                ['name' => 'Lesson 7'],
                ['name' => 'Lesson 8'],
                ['name' => 'Lesson 9'],
                ['name' => 'Lesson 10'],
            ]);
        }
    }
}
