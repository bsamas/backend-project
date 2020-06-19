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

//api for department
Route::get('departments',['uses'=>'DepartmentController@getAllDepartments']);
Route::get('department/{departmentId}',['uses'=>'DepartmentController@getSingleDepartment']);
Route::post('department',['uses'=>'DepartmentController@postDepartment']);
Route::put('department/{departmentId}',['uses'=>'DepartmentController@putDepartment']);
Route::delete('department/{departmentId}',['uses'=>'DepartmentController@deleteDepartment']);

// //api for Staffs
Route::get('staffs',['uses'=>'StaffController@getAllStaffs']);
Route::get('staff/{staffId}',['uses'=>'StaffController@getSingleStaff']);
Route::post('staff',['uses'=>'StaffController@postStaff']);
Route::put('staff/{staffId}',['uses'=>'StaffController@putStaff']);
Route::delete('staff/{staffId}',['uses'=>'StaffController@deleteStaff']);

//api for room
Route::get('rooms',['uses'=>'RoomController@getAllRooms']);
Route::get('room/{roomId}',['uses'=>'RoomController@getSingleRoom']);
Route::post('room',['uses'=>'RoomController@postRoom']);
Route::put('room/{roomId}',['uses'=>'RoomController@putRoom']);
Route::delete('room/{roomId}',['uses'=>'RoomController@deleteRoom']);

// //api for attendances
// Route::get('Staffs',['uses'=>'DepartmentController@getAllDepartment']);
// Route::get('Department/{DepartmentId}',['uses'=>'DepartmentController@getSingleDepartment']);
// Route::post('Department',['uses'=>'DepartmentController@postDepartment']);
// Route::put('Department/{DepartmentId}',['uses'=>'DepartmentController@putDepartment']);
// Route::delete('Department/{DepartmentId}',['uses'=>'DepartmentController@deleteDepartment']);
