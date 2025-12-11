<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::view('/test', 'website.main');
Route::view('/layout', 'website.partials.layouts');
Route::view('/contact-us', 'website.contact_us');
Route::view('/careers', 'website.careers');
Route::view('/terms', 'website.terms');
Route::view('/privacy', 'website.privacy');
Route::view('/product-details', 'website.product_details');
Route::view('/product-track', 'website.product_track');