<?php

namespace App\Http\Controllers\Public;

use Throwable;
use App\Models\Card;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function __invoke(Factory $view, string $uuid): View | RedirectResponse
    {
        try {
            return $view->make('cards.public.show', [
                'card' => Card::whereUuid($uuid)->firstOrFail()
            ]);
        } catch (Throwable $e) {
            return redirect()->route('root')->with(['alert' => 'Profile not found']);
        }
    }
}
