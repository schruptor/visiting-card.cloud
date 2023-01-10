<?php

namespace App\View\Components\Information\PhoneBusiness;

use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $icon = 'heroicon-s-phone';

    public function __construct(
        public Information $information,
    ) { }

    public function render(): View
    {
        return view('components.information.phone-business.show');
    }
}
