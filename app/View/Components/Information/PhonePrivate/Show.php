<?php

namespace App\View\Components\Information\PhonePrivate;

use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $icon = 'bi-phone-fill';

    public function __construct(
        public Information $information,
    ) { }

    public function render(): View
    {
        return view('components.information.phone-private.show');
    }
}
