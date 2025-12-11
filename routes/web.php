<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::view('/test', 'website.main');
Route::view('/layout', 'website.partials.layouts');
Route::view('/contact-us', 'website.contact_us');
