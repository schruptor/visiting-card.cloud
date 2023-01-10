<?php

namespace App\View\Components\Information\Youtube;

use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $icon = 'fas-suitcase';

    public function __construct(
        public Information $information,
    ) { }

    public function render(): View
    {
        return view('components.information.youtube.show');
    }
}
