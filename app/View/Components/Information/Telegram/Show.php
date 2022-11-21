<?php

namespace App\View\Components\Information\Telegram;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public function render(): View
    {
        return view('components.information.telegram.show');
    }
}
