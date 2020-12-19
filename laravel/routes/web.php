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

// Landing Page
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

Route::get('/admin/schedule/id', function () {
    return view('admin.schedule');
})->name('/admin/schedule/id');

Route::get('/admin/schedule/id/edit/', function () {
    return view('admin.post');
})->name('/admin/schedule/id/edit');

Route::get('/admin/schedule/id/edit/id', function () {
    return view('admin.post');
});
