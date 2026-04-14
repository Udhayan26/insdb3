<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

// Dashboard Home
Route::get('/', [InscriptionController.php, 'index']);

// Location Hierarchy (State > District > Taluk > Village)
Route::get('/location', [InscriptionController::class, 'location']);

// Placeholders for other sections
Route::view('/books', 'books');
Route::view('/map', 'map');
