<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        $students = Student::all();
        return response()->json(['students' => $students]);
    }

    public function getSingleStudent($studentId)
    {
        $student = Student::find($studentId);

        if (!$student) return response()->json(['error' => 'Student not found']);

        $student->courses;

        return response()->json(['student' => $student]);
    }

    public function postStudent(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'reg_number'=>'required | unique:students',
            'fingerprint'=>'required | unique:students',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'year_of_study'=>'required',
            'email'=>'required | unique:students',
            'phone_number'=>'required | unique:students',


        ]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);
        }
        $student=new Student();
        $student->reg_number=$request->input('reg_number');
        $student->fingerprint=$request->input('fingerprint');
        $student->first_name=$request->input('first_name');
        $student->middle_name=$request->input('middle_name');
        $student->last_name=$request->input('last_name');
        $student->gender=$request->input('gender');
        $student->date_of_birth=$request->input('date_of_birth');
        $student->year_of_study=$request->input('year_of_study');
        $student->email=$request->input('email');
        $student->phone_number=$request->input('phone_number');









        $student->save();
        return response()->json(['student' => $student],200);
    }
}
