<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('Home');
});

Route:: get('/layanan', function() {
    return view('layanan');
});

Route:: get('/login', function() {
    return view('login');
});

Route:: get('/navTest', function() {
    return view('testNav');
});