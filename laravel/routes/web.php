<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduleController;

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

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/contact', function () {
    return view('contact');
})->name('/contact');

Route::get('/service', function () {
    return view('service');
})->name('/service');

Route::get('/about', function () {
    return view('about');
})->name('/about');

Route::get('/register', [AuthController::class, 'getRegister'])->name('/register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register');

Route::get('/login', [AuthController::class, 'getLogin'])->name('/login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Client Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('/dashboard');

Route::get('/schedule', function () {
    return view('dashboard.schedule');
})->name('/schedule');

Route::get('/plan', function () {
    return view('dashboard.buy_plan');
})->name('/plan');

Route::get('/theme', function () {
    return view('dashboard.buy_theme');
})->name('/theme');

// Admin Dashboard
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('/admin/login');

Route::get('/admin', function () {
    return view('admin.index');
})->name('/admin');

Route::get('/admin/schedule/{id}', function(){
    return view('admin.schedule');
})->name('/admin/schedule/');

Route::post('/admin/schedule/create', [ScheduleController::class, 'store']);

Route::get('/admin/schedule/edit/{id}', [ScheduleController::class, 'edit'])->name('/admin/schedule/edit');

Route::patch('/admin/schedule/edit', [ScheduleController::class, 'update']);

Route::delete('/admin/schedule/delete', [ScheduleController::class, 'destroy']);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('/dashboard');

    Route::get('/schedule', function () {
        return view('dashboard.schedule');
    })->name('/schedule');

});

Route::get('/getCalendarData/{id}',[ScheduleController::class,'getData']);