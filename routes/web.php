<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;



// Home Route
Route::get('/', [MainController::class, 'home'])
    ->name('home');