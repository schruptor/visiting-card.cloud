<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformationController;

Route::get('/dashboard', DashboardController::class)
    ->name('dashboard');

Route::resource('cards', CardsController::class);

Route::resource('information', InformationController::class);
