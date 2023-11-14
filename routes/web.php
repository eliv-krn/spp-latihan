<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LevelController;


Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/spp');
});

Route::middleware(['auth:petugas,siswa'])->group(function () {
    Route::get('/spp', [LevelController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::resource('/kelas', \App\Http\Controllers\KelasController::class)->except('show');
});
