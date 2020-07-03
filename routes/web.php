<?php

use App\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/about', ['uses' => 'StudentController@index']);

// Route::get('/home', ['uses' => 'LecturerController@index']);

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/ register', function () {
    return view('pages.register');
});

Route::get('/ login', function () {
    return view('pages.login');
});

Route::get('/ tables', function () {
    return view('pages.tables');
});

Route::get('/ blank', function () {
    return view('pages.blank');
});

Route::get('/ forgot-password', function () {
    return view('pages.forgot-password');
});

Route::get('/ department', function () {
    return view('pages.department');
});

Route::get('/ student', function () {
    return view('pages.student');
});

//create a route for showstudent which will link to its controller
Route::get('/ showStudent', 'StudentController@getAllStudents');



Route::get('/ staff', function () {
    return view('pages.staff');
});

Route::get('/ programme', function () {
    return view('pages.programme');
});

Route::get('/ attendance', function () {
    return view('pages.attendance');
});

Route::get('/ course', function () {
    return view('pages.course');
});

Route::get('/ report', function () {
    return view('pages.report');
});

Route::post('/Studentpost', 'StudentController@postStudent');



Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
