<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\videoController;

Route::view('/', 'welcome');
Route::get('/app', [videoController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
