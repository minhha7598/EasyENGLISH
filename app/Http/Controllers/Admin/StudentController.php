<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\Error;
use App\Http\Responses\Success;
use App\Models\Student;
use App\Models\StudentParent;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(): Error|Success
    {
        try{
            $students = Student::with('studentParent:id,name,phone_number,active')->get();

            return new Success('Get all student successfully!', [$students], 200);
        }catch (Exception $e) {
            return new Error('Get all student failed!', $e, 404);
        }
    }
    public function create(Request $request): Error|Success
    {
        try{
            $parent = StudentParent::create([
                'name' => $request->input('parent_name'),
                'phone_number' => $request->input('parent_phone_number'),
                ]);
            $student = $parent->students()->create([
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'description' => $request->input('description'),
                'sex' => $request->input('sex'),
            ]);
            return new Success('Create new student successfully!', ['No data'], 200);
        }catch (Exception $e) {
            return new Error('Create new student failed!', $e, 404);
        }
    }
    public function update(Request $request): Error|Success
    {
        try{
            $parent = StudentParent::update([
                'name' => $request->input('parent_name'),
                'phone_number' => $request->input('parent_phone_number'),
                'active' => $request->input('active'),
            ]);
            $student = $parent->students()->update([
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'description' => $request->input('description'),
                'sex' => $request->input('sex'),
            ]);
            return new Success('Update student successfully!', ['No data'], 200);
        }catch (Exception $e) {
            return new Error('Update student failed!', $e, 404);
        }
    }
}
