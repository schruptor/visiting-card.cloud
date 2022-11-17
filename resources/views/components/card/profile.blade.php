<x-widget :header="__('General Profile Information')">
    <x-form method="PUT" :action="route('profiles.update', ['profile' => $card->cardable])">
        <x-form-input name="prename" :label="__('profile.prename')" :value="$card->cardable->prename"/>

        <x-form-input name="name" :label="__('profile.name')" :value="$card->cardable->name"/>

        <x-form-input name="company" :label="__('profile.company')" :value="$card->cardable->company"/>

        <x-form-submit />
    </x-form>
</x-widget>
<x-widget-spacer />
<x-widget>
    <x-slot:header>
        <div class="w-full flex justify-between">
            <div>{{ __('Specific Card Information') }}</div>
            <div><a class="btn-dark-grey" href="{{ route('information.create', ['card' => $card->id]) }}">Create Information</a></div>
        </div>
    </x-slot:header>
    @livewire('information', ['profile' => $profile])
</x-widget>
