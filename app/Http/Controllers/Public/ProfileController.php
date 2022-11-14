<?php

namespace App\Http\Controllers\Public;

use Throwable;
use App\Models\Profile;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function __invoke(Factory $view, string $uuid): View | RedirectResponse
    {
        try {
            return $view->make('profile.public.show', [
                'profile' => Profile::whereUuid($uuid)->firstOrFail()
            ]);
        } catch (Throwable $e) {
            return redirect()->route('root')->with(['alert' => 'Profile not found']);
        }
    }
}
