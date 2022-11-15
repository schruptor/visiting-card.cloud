<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Information as InformationModel;

class Information extends Component
{
    public $profile;

    public function mount($profile)
    {
        $this->profile = $profile;
    }

    public function render()
    {
        return view('livewire.information', [
            'profile' => InformationModel::whereProfileId($this->profile->id)->orderBy('order')->get()
        ]);
    }

    public function updateOrder($list)
    {
        foreach($list as $item) {
            InformationModel::find($item['value'])->update(['order' => $item['order']]);
        }
    }
}
