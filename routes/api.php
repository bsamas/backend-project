<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//api for students
Route::get('students',['uses'=>'StudentController@getAllStudents']);
Route::get('student/{studentId}',['uses'=>'StudentController@getSingleStudent']);
Route::post('student',['uses'=>'StudentController@postStudent']);
Route::put('student/{studentId}',['uses'=>'StudentController@putStudent']);
Route::delete('student/{studentId}',['uses'=>'StudentController@deleteStudent']);


//api for courses
Route::get('courses',['uses'=>'CourseController@getAllCourses']);
Route::get('course/{courseId}',['uses'=>'CourseController@getSingleCourse']);
Route::post('course',['uses'=>'CourseController@postCourse']);
Route::put('course/{courseId}',['uses'=>'CourseController@putCourse']);
Route::delete('course/{coursetId}',['uses'=>'CourseController@deleteCourse']);


