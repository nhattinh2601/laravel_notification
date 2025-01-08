<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/deposit', [App\Http\Controllers\DepositController::class,'deposit'])->name('deposit');
Route::get('/mark-as-read', [App\Http\Controllers\DepositController::class,'markAsRead'])->name('mark-as-read');