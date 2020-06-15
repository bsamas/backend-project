<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
      public function getAllCourses()
    {
        $courses = Course::all();
        return response()->json(['courses' => $courses]);
    }

    public function getSingleCourse($courseId)
    {
        $course = Course::find($courseId);

        if (!$course) return response()->json(['error' => 'Course not found']);

        $course->courses;

        return response()->json(['course' => $course]);
    }

    public function postCourse(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'course_code'=>'required | unique:courses',
            'course_name'=>'required'

        ]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
                'message'=>$validator->errors()->first()
            ],404);
        }
        $course=new Course();
        $course->course_code=$request->input('course_code');
        $course->course_name=$request->input('course_name');

        $course->save();
        return response()->json(['course' => $course],200);
    }
}



