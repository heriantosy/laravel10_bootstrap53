<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
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

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('/logout',[AuthController::class,'log_out'])->name('logout');

Route::group(['middleware' => 'auth'], function (){
    // Route::resource('siswa', SiswaController::class);
    Route::get('siswa', [SiswaController::class, 'index']);
    Route::post('siswa', [SiswaController::class, 'store']);
    Route::get('siswa/{id}', [SiswaController::class, 'show']);
    Route::put('siswa/{id}', [SiswaController::class, 'update']);
    Route::delete('siswa/{id}', [SiswaController::class, 'destroy']);


    // Route::resource('guru', GuruController::class);
    Route::get('guru', [GuruController::class, 'index']);
    Route::post('guru', [GuruController::class, 'store']);
    Route::get('guru/{id}', [GuruController::class, 'show']);
    Route::put('guru/{id}', [GuruController::class, 'update']);
    Route::delete('guru/{id}', [GuruController::class, 'destroy']);

    //other way route
    Route::resource('pelajaran', PelajaranController::class);

    Route::resource('kurikulum', KurikulumController::class);

    Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
});
