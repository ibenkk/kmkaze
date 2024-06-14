<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MultiContentController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';
Route::resource('/', LandingpageController::class);
Route::resource('/vapestore/{product:kategory}', MultiContentController::class)->except(
    ['show','update','destroy','edit']
    );
Route::get('/vapestore/{product:kategory}/{products:id}',[MultiContentController::class, 'show']);
// Route::get('/vapestore/{kategory}/product/{products::id}',[MultiContentController::class,'show']);
