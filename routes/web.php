<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::post('/eliminacion-datos', function(){ return view('eliminacion-de-datos');})->name('eliminacion.datos');

Route::get('/politicas-privacidad', function(){ return view('politicas-de-privacidad');})->name('politicas.privacidad');

Route::get('/auth/redirect', [AuthController::class,'redirect'])->name('auth.redirect');
 
Route::get('/auth/callback', [AuthController::class,'callback'])->name('auth.callback');

Route::get('auth/google', [AuthController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
