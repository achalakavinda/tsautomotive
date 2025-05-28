<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('aboutUs');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::post('/lead/contact', [LeadController::class, 'storeContact'])->name('lead.contact');