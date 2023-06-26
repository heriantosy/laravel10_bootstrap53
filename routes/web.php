<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\StudentController;
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

Route::resource('student', StudentController::class);
Route::resource('guru', GuruController::class);


