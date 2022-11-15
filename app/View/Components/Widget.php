<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Widget extends Component
{
    public function __construct(
        public ?string $header = null
    ) { }

    public function render(): View
    {
        return view('components.widget');
    }
}
