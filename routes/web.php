<?php

use Illuminate\Support\Facades\Route;

// Importo il "MainController".
use App\Http\Controllers\MainController;



// Home Route
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// Home Movie Route
Route::get('/movie/home', [MainController::class, 'movie'])
    ->name('movie.home');

// Create  Route 
Route::get('/movie/create', [MainController::class, 'movieCreate'])
    ->name('movie.create');

// Store  Route
Route::post('/movie/create', [MainController::class, 'movieStore'])
    ->name('movie.store');

// Edit Route
Route::get('/movie/edit/{movie}', [MainController::class, 'movieEdit'])
    ->name('movie.edit');

// Update Route
Route::post('/movie/edit/{movie}', [MainController::class, 'movieUpdate'])
    ->name('movie.update');

// Delete Route
Route::get('/movie/delete/{movie}', [MainController::class, 'movieDelete'])
    ->name('movie.delete');


use App\Http\Controllers\ApiController;



Route::get('/api/v1/movie/all', [ApiController::class, 'movieAll']);