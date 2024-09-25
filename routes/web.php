<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KrsController;


Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware('auth');
});

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    });
    
    Route::controller(UserController::class)->group(function(){
        Route::get('/mahasiswa', 'mahasiswa');
        Route::get('/user', 'index');
        Route::get('/create-user', 'createview');
        Route::post('/create-user', 'create');
        Route::get('/update-user-{users:id}', 'updateview');
        Route::put('/update-user-{users:id}', 'update');
        Route::delete('/delete-user-{users:id}', 'delete');
    });

    Route::controller(MataKuliahController::class)->group(function(){
        Route::get('/matakuliah', 'index');
        Route::get('/create-matakuliah', 'createview');
        Route::post('/create-matakuliah', 'create');
        Route::get('/update-matakuliah-{matakuliah:id}', 'updateview');
        Route::put('/update-matakuliah-{matakuliah:id}', 'update');
        Route::delete('/delete-matakuliah-{matakuliah:id}', 'delete');
    });

    Route::controller(KelasController::class)->group(function(){
        Route::get('/kelas', 'index');
        Route::get('/create-kelas', 'createview');
        Route::post('/create-kelas', 'create');
        Route::get('/update-kelas-{kelas:id}', 'updateview');
        Route::put('/update-kelas-{kelas:id}', 'update');
        Route::delete('/delete-kelas-{kelas:id}', 'delete');
    });

    Route::controller(JadwalController::class)->group(function(){
        Route::get('/jadwal', 'index');
        Route::get('/create-jadwal', 'createview');
        Route::post('/create-jadwal', 'create');
        Route::get('/update-jadwal-{jadwal:id}', 'updateview');
        Route::put('/update-jadwal-{jadwal:id}', 'update');
        Route::delete('/delete-jadwal-{jadwal:id}', 'delete');
    });

    Route::controller(KrsController::class)->group(function(){
        Route::get('/krs', 'index');
        Route::get('/lihat-krs-{user:id}', 'lihat');
        Route::get('/validasi-krs-{id}', 'validasi');
        Route::get('/tolak-krs-{id}', 'tolak');
        Route::get('/krsku', 'krsku');
        Route::get('/create-krsku', 'createview');
        Route::post('/create-krsku', 'create');
    });
});
