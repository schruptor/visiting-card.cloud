<?php

namespace App\Http\Controllers\Auth\Developer;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        if (config('app.env') !== 'local') {
            return redirect()->route('root')->banner('You are not in local mode.');
        }

        $user = User::first();

        auth()->login($user);

        return redirect()->route('dashboard')->banner('Successfully logged in as a developer.');
    }
}
