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

Route::get('/register', function () {
    return view('register');
})->name('/register');

Route::get('/login', function () {
    return view('login');
})->name('/login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('/dashboard');

Route::get('/schedule', function () {
    return view('dashboard.schedule');
})->name('/schedule');


// Route::get('/register', function () {
//     return view('register');
// })->name('/register');

Route::get('/register', [AuthController::class, 'getRegister'])->name('/register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register');

Route::get('/login', [AuthController::class, 'postLogin'])->name('post.login');