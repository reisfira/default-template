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
    return view('welcome');
});

Route::get('login', function() {
    return view('login');
})->name('login');

Route::post('login', function() {
    return view('login');
})->name('login.store');

Route::post('logout', function() {
    return;
})->name('logout');

Route::get('register', function() {
    return view('register');
});

Route::post('register', function() {
    return;
})->name('register.store');

Route::get('home', function() {
    return view('home');
})->name('home');
