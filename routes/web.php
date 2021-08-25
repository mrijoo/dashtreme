<?php

use App\http\controllers\form;
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
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/calendar.html', function () {
    return view('calendar');
});

Route::get('/forms.html', function () {
    return view('forms');
});

Route::get('/icons.html', function () {
    return view('icons');
});

Route::get('/login.html', [form::class, 'login']);

Route::get('/register.html', [form::class, 'register']);

Route::get('/profile.html', function () {
    return view('profile');
});

Route::get('/reset-password.html', function () {
    return view('reset-password');
});

Route::get('/tables.html', function () {
    return view('tables');
});