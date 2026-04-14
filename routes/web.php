<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/map', function () {
    return view('map');
});
