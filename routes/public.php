<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\ProfileController;
use App\Http\Controllers\Auth\Developer\LoginController as DeveloperLoginController;

Route::view('/', 'welcome')->name('root');

Route::get('/profile/{uuid}', ProfileController::class)->name('profile.public.show');

Route::get('/login/as/developer', DeveloperLoginController::class)->name('login-as-developer');
