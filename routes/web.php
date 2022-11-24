<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\VisitorAvaliationController;
use App\Http\Controllers\TeacherAvaliationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routestains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('index');
});

Route::prefix('teacher')->group(function(){
    Route::get('/login', function(){
        return view('teacher-login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'teacher_store']);
});

Route::prefix('admin')->group(function(){
    Route::resource('/visitors', VisitorController::class);
});

Route::resource('/visitor-avaliation', VisitorAvaliationController::class);
Route::resource('/teacher-avaliation', TeacherAvaliationController::class);
