<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Profile as ProfileModel;

class Profile extends Component
{
    public function __construct(
        public ProfileModel $profile
    ) { }

    public function render(): View
    {
        return view('components.card.profile');
    }
}
