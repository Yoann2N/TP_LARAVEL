<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Qui-sommes-nous', function () {
    return view('Qui-sommes-nous');
});

