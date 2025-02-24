<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Menggunakan resource controller untuk menangani semua CRUD siswa
Route::resource('siswa', SiswaController::class);
