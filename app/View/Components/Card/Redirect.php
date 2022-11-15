<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Redirect extends Component
{
    public function render(): View
    {
        return view('components.card.redirect');
    }
}
