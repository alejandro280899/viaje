<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('viajes', App\Http\Controllers\ViajeController::class);
Route::resource('destinos', App\Http\Controllers\DestinoController::class);