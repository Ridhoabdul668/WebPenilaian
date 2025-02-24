<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('siswa', SiswaController::class);
Route::post('/siswa/create', [SiswaController::class, 'store']);

