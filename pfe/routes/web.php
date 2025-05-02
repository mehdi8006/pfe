<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class ,'homeshow']);
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');
