<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/siswa/add', function () {
    return view('siswa.add');
});

Route::resource('siswa', SiswaController::class);


// Route::resource('guru', GuruController::class);


