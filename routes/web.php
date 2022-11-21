<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

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

Route::prefix('visitor')->group(function(){
    Route::get('/login', function(){
        return view('visitor-login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'visitor_store']);
});

Route::prefix('admin')->group(function(){
    Route::resource('/visitors', VisitorController::class);
});

Route::get('/visitor-avaliation', function(){
    return view('visitor-avaliation');
});
