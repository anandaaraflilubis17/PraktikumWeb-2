<?php

use Illuminate\Support\Facades\Route;

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

// route salam
Route::get('salam', function () {
    return 'halo semua';
});

// buat routing kabar
Route::get('kabar', function () {
    return view('kondisi');
});

// buat routing nilai
Route::get('nilai', function () {
    return view('nilai');
});

// buat routing pasien
Route::get('pasien', function () {
    return view('pasien');
});