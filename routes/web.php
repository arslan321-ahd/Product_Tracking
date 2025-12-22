<?php

use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Admin\TermController;
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
Route::get('/courier', [CourierController::class, 'index'])->name('courier.index');
Route::get('/companies/data', [CourierController::class, 'data'])->name('companies.data');
Route::delete('/courier/{id}', [CourierController::class, 'destroy'])->name('courier.destroy');
Route::get('/courier/{id}/edit', [CourierController::class, 'edit'])->name('courier.edit');
Route::put('/courier/{id}', [CourierController::class, 'update'])->name('courier.update');
// terms Routes
Route::get('/admin-term', [TermController::class, 'create'])->name('terms.create');
Route::post('/terms/store', [TermController::class, 'store'])->name('terms.store');