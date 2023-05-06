<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('teachers', App\Http\Controllers\teacherController::class);


Route::resource('students', App\Http\Controllers\studentController::class);


Route::resource('class1s', App\Http\Controllers\class1Controller::class);


/*Route::resource('enrollments', App\Http\Controllers\enrollmentController::class); */


Route::resource('attendances', App\Http\Controllers\attendanceController::class);


