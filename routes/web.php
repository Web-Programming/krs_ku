<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;
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
});