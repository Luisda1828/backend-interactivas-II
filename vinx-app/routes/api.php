<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('/events/all',  [EventController::class, 'apiEvent']); */

Route::get('/courses/{id} ',  [EventController::class, 'apiEvent']);
Route::get('/events/updateState/{idEvent}/{idUser}',  [EventController::class, 'apiUdateState']);
Route::get('/events/all',  [EventController::class, 'apiEvent']);
Route::post('/user/forgotPassword', [UserController::class, 'forgotPassword']);
Route::post('/user/changeUserPassword', [UserController::class, 'changeUserPassword']);

Route::post('/user/create', [UserController::class, 'store']);
Route::post('/user/auth', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user/toke', [UserController::class, 'userToken']);
});
