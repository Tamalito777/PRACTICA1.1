<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::post('/iniciarsesion', [AuthController::class, 'login'])
    ->name('iniciarsesion');

Route::get('/auth/verificar-codigo', [AuthController::class, 'showVerifyForm'])
    ->name('auth.verify.form');

Route::post('/auth/verificar-codigo', [AuthController::class, 'verifyCode'])
    ->name('auth.verify.submit');

Route::middleware('auth')->group(function () {

    Route::get('/cerrarsesion', [AuthController::class, 'cerrarSesion'])
        ->name('cerrarsesion');

    Route::middleware(['role:administrador'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin-dashboard'); 
        })->name('admin.dashboard');
    });

    Route::middleware(['role:empleado'])->group(function () {
        Route::get('/empleado/dashboard', function () {
            return view('empleado-dashboard'); 
        })->name('empleado.dashboard');
    });

});