<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class File extends Component
{
    public function render(): View
    {
        return view('components.card.file');
    }
}
