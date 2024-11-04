<?php

use Illuminate\Support\Facades\Route;

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
