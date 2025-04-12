<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth.basic')->group(function () {
    Route::get('/players', [PlayersController::class, 'index'])->name('players');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
