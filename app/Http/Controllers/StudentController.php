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
        return view('studentview', compact('students'));
        // return response()->json(['students' => $students]);
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
            // 'fingerprint'=>'required | unique:students',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'year_of_study'=>'required',
            'email'=>'required | unique:students',
            'phone_number'=>'required | unique:students'


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
        return redirect('/student')->with('message', 'registration done successfully');
    }



    public function putStudent(Request $request, $studentId)
    {

          $validator=Validator::make($request->all(),
        [
            'reg_number'=>'required ',
            'fingerprint'=>'required',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'year_of_study'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
        ]);


        if($validator->fails())
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);

        $student = Student::find($studentId);

        if(!$student)  return response()->json(['error'=>'student not found']);

        $student->update([
            'reg_number'=> $request->reg_number,
            'fingerprint'=> $request->fingerprint,
            'first_name'=> $request->first_name,
            'middle_name'=> $request->middle_name,
            'last-name'=> $request->last_name,
            'gender'=> $request->gender,
            'date_of_birth'=> $request->date_of_birth,
            'year_of_study'=> $request->year_of_study,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number

        ]);


        // $student->update($request->all());
    }

    public function deleteStudent($studentId)
    {

        $student = Student::find($studentId);

        if (!$student) return response()->json(['error' => 'student not found']);

        $student->delete();

        return response()->json(['message' => 'student deleted successfully!']);
    }
}
