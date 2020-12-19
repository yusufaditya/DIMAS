<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/home', function () {
    return view('landingPage');
})->name('/');

Route::get('/contact', function () {
    return view('contact');
})->name('/contact');

Route::get('/service', function () {
    return view('service');
})->name('/service');

Route::get('/about', function () {
    return view('about');
})->name('/about');

Route::get('/register', [AuthController::class, 'getRegister'])->name('/register')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register')->middleware('guest');

Route::get('/login', [AuthController::class, 'getLogin'])->name('/login')->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('/dashboard');

    Route::get('/schedule', function () {
        return view('dashboard.schedule');
    })->name('/schedule');
});
