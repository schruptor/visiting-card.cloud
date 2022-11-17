<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfilesController;

Route::get('/dashboard', DashboardController::class)
    ->name('dashboard');

Route::resource('cards', CardsController::class);

Route::resource('information', InformationController::class);

Route::resource('profiles', ProfilesController::class);

