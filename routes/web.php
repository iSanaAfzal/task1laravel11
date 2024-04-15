<?php
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});
Route::get('login/{key}', [LoginController::class, 'index']);
Route::post('/store', [LoginController::class, 'store'])->name('login');