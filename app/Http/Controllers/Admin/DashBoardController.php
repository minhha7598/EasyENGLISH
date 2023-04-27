<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\Error;
use App\Http\Responses\Success;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function showDashboard(){
        try{
            $student = Student::all()->count();
            $classRoom = Classroom::all()->count();
            $teacher = Teacher::all()->count();
            $course = Course::all()->count();
            $classes = Classes::all()->count();

            return new Success('Get general information successfully!', [$student.' students', $classRoom.' classrooms', $teacher.' teachers', $course.' courses', $classes.' classes'], 200);
        }catch (Exception $e) {
            return new Error('Get general information failed!', $e, 404);
        }
    }
}
