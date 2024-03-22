<?php

use Illuminate\Support\Facades\Route;
use App\Http;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authentication']);
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('home', [UserController::class, 'home'])->middleware(['auth','onlyUser']);
Route::get('booksList', [UserController::class, 'booksList'])->middleware(['onlyUser']);
Route::get('search', [UserController::class, 'search'])->middleware(['onlyUser']);

