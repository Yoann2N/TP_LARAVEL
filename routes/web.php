<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/Contact', function () {
    return view('Contact');
}) ->name('Contact');

Route::get('/Qui-sommes-nous', function () {
    return view('Qui-sommes-nous');
}) ->name('Qui-sommes-nous');

