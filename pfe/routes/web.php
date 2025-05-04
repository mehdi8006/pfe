<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class ,'homeshow']);
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');


// Routes pour l'authentification
Route::get('/auth', [HomeController::class, 'showAuthForm'])->name('form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route pour mot de passe oublié (à implémenter plus tard)
Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->name('password.request');