<?php

use App\Http\Controllers\Admin\CourierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/test', 'website.main');
Route::view('/layout', 'website.partials.layouts');
Route::view('/contact-us', 'website.contact_us');
Route::view('/careers', 'website.careers');
Route::view('/terms', 'website.terms');
Route::view('/privacy', 'website.privacy');
Route::view('/product-details', 'website.product_details');
Route::view('/product-track', 'website.product_track');

// admin Routs
Route::view('/admin-layouts', 'admin.partials.layouts');
Route::view('/admin-dashboard', 'admin.dashboard');
Route::get('/add-courier', [CourierController::class, 'create']);
Route::post('/companies/store', [CourierController::class, 'store'])->name('companies.store');
Route::get('all-courier', [CourierController::class, 'index'])->name('companies.index');
Route::get('companies/data', [CourierController::class, 'data']);