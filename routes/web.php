<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/data', function (){
    return view('dashboard.photos.data');
});

Route::get('home', function () {
    return view('dashboard.home');
});

Route::get('/create', function () {
    return view('dashboard.photos.create');
});

Route::get('/edit', function () {
    return view('dashboard.photos.edit');
});
