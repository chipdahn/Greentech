<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ProfileController;


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

Route::post('/signup', [SignupController::class, 'signup']);
Route::post('/signin', [SigninController::class, 'signin']);
Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->middleware('pass');
Route::post('/book_appointment', [SigninController::class, 'store'])->middleware('pass');
Route::get('/view_appointment', [ProfileController::class, 'index'])->middleware('doctor');

