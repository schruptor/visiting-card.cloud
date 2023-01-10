<?php

namespace App\View\Components\Information\Link;

use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $icon = 'fas-link';

    public function __construct(
        public Information $information,
    ) { }

    public function render(): View
    {
        return view('components.information.link.show');
    }
}
