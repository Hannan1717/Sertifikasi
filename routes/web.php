<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\RiwayatpekerjaanController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/alumni', [AlumniController::class, 'index']);
    Route::get('/alumni/create', [AlumniController::class, 'create']);
    Route::post('/alumni/store', [AlumniController::class, 'store']);
    Route::get('/alumni/{id}/edit', [AlumniController::class, 'edit']);
    Route::put('/alumni/{id}', [AlumniController::class, 'update']);
    Route::delete('/alumni/{id}', [AlumniController::class, 'destroy']);
    Route::delete('/alumni/delete/{id}', [AlumniController::class, 'destroy2']);
    Route::get('/alumni/recycle', [AlumniController::class, 'recycle']);
    Route::get('/alumni/recover/{id}', [AlumniController::class, 'recover']);
    Route::get('/alumni/recover/{id}', [AlumniController::class, 'recover']);

    Route::get('/riwayatpekerjaan', [RiwayatpekerjaanController::class, 'index']);
    Route::get('/riwayatpekerjaan/create', [RiwayatpekerjaanController::class, 'create']);
    Route::post('/riwayatpekerjaan/store', [RiwayatpekerjaanController::class, 'store']);
    Route::get('/riwayatpekerjaan/{id}/edit', [RiwayatpekerjaanController::class, 'edit']);
    Route::put('/riwayatpekerjaan/{id}', [RiwayatpekerjaanController::class, 'update']);
    Route::delete('/riwayatpekerjaan/{id}', [RiwayatpekerjaanController::class, 'destroy']);
    Route::delete('/riwayatpekerjaan/delete/{id}', [RiwayatpekerjaanController::class, 'destroy2']);
    Route::get('/riwayatpekerjaan/recycle', [RiwayatpekerjaanController::class, 'recycle']);
    Route::get('/riwayatpekerjaan/recover/{id}', [RiwayatpekerjaanController::class, 'recover']);
    Route::get('/riwayatpekerjaan/recover/{id}', [RiwayatpekerjaanController::class, 'recover']);

    // Sertifikasi
    Route::get('/sertifikasi', [SertifikasiController::class, 'index'])->name('sertifikasi.index');
    Route::get('/sertifikasi/create', [SertifikasiController::class, 'create'])->name('sertifikasi.create');
    Route::get('/sertifikasi/recycle', [SertifikasiController::class, 'recycle'])->name('sertifikasi.recycle');
    Route::post('/sertifikasi/store', [SertifikasiController::class, 'store'])->name('sertifikasi.store');
    Route::get('/sertifikasi/edit/{id}', [SertifikasiController::class, 'edit'])->name('sertifikasi.edit');
    Route::post('/sertifikasi/update/{id}', [SertifikasiController::class, 'update'])->name('sertifikasi.update');
    Route::post('/sertifikasi/destroy/{id}', [SertifikasiController::class, 'destroy'])->name('sertifikasi.destroy');
    Route::post('/sertifikasi/recover/{id}', [SertifikasiController::class, 'recover'])->name('sertifikasi.recover');
    Route::post('/sertifikasi/forceDelete/{id}', [SertifikasiController::class, 'forceDelete'])->name('sertifikasi.forceDelete');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
