<?php

namespace App\View\Components\Information\Linkedin;

use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $icon = 'bi-linkedin';

    public function __construct(
        public Information $information,
    ) { }

    public function render(): View
    {
        return view('components.information.linkedin.show');
    }
}
