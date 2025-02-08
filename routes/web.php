<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MultiContentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UpdateInfoCustomer;
use App\Http\Middleware\Admin;
use App\Models\Product;
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
Route::resource('/vapestore/{product:product_category}', MultiContentController::class)->except(
    ['show','update','destroy','edit']
    );
    Route::get('/vapestore/{product:product_category}/{products:id}',[MultiContentController::class, 'show']);
    Route::post('/checkout/product/{product}',[ProductController::class, 'orderProduct']);
    Route::post('/customer/verif/{customer}/{product}',[ProductController::class, 'verifyOtp']);
    Route::get('/login',[LoginController::class, 'index'])->name('login');
    Route::post('/login',[LoginController::class, 'store'])->name('storelogin');
    Route::resource('/dashboardadmin/updateinfo',UpdateInfoCustomer::class);
    Route::resource('/dashboardadmin/product',ProductController::class);
    Route::resource('/dashboardadmin', DashboardAdmin::class)->except(['updatepayment'])->middleware(['admin','auth']);
    Route::put('/dashboardadmin/payment/{products:id}',[DashboardAdmin::class,'updatepayment'])->middleware(['admin','auth']);
// Route::get('/vapestore/{kategory}/product/{products::id}',[MultiContentController::class,'show']);
