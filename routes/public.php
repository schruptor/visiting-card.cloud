<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\ProfileController;

Route::view('/', 'welcome')->name('root');

Route::get('/profile/{uuid}', ProfileController::class)->name('profile.public.show');
