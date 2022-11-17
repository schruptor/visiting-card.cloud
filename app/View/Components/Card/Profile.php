<?php

namespace App\View\Components\Card;

use App\Models\Card;
use App\Models\Profile as ProfileModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Profile extends Component
{
    public ProfileModel $profile;

    public function __construct(
        public Card $card
    ) {
        $this->profile = $this->card->cardable;
    }

    public function render(): View
    {
        return view('components.card.profile');
    }
}
