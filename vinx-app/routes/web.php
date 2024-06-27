<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHasCourseController;
use App\Http\Controllers\UserHasEventController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     return view('login');
 });
Route::resource('auth', AuthController::class);
Route::middleware('check.cookie')->group(function () {
    Route::resource('home', HomeController::class);
    Route::resource('course', CourseController::class);
    Route::resource('event', EventController::class);
    Route::resource('user', UserController::class);
    Route::resource('userHasCourse', UserHasCourseController::class);
    Route::resource('userHasEvent', UserHasEventController::class);
});


