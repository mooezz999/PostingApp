<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::post('/register',[RegisterController::class,'store']);