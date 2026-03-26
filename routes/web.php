<?php

use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// admin Routs
Route::view('/admin-layouts', 'admin.partials.layouts');
Route::view('/admin-dashboard', 'admin.dashboard');
// courier Routes
Route::get('/add-courier', [CourierController::class, 'create'])->name('companies.create');
Route::post('/companies/store', [CourierController::class, 'store'])->name('companies.store');
Route::get('/courier', [CourierController::class, 'index'])->name('courier.index');
Route::get('/companies/data', [CourierController::class, 'data'])->name('companies.data');
Route::delete('/courier/{id}', [CourierController::class, 'destroy'])->name('courier.destroy');
Route::get('/courier/{id}/edit', [CourierController::class, 'edit'])->name('courier.edit');
Route::put('/courier/{id}', [CourierController::class, 'update'])->name('courier.update');
// terms Routes
Route::get('/admin-term', [TermController::class, 'create'])->name('terms.create');
Route::post('/terms/store', [TermController::class, 'store'])->name('terms.store');
Route::view('/admin-terms', 'website.terms');

// Route::get('/', [HomeController::class, 'index']);
Route::view('/layout', 'website.partials.layouts');
Route::view('/contact-us', 'website.contact_us');
Route::view('/careers', 'website.careers');
Route::view('/privacy', 'website.privacy');
Route::view('/product-details', 'website.product_details');
// Route::view('/product-track', 'website.product_track');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/{slug}', [WebsiteController::class, 'productTrack'])->name('product.track');