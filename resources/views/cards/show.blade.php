<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.show.card') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-widget :header="__('General Card Information')">
                <x-form method="PUT" :action="route('cards.update', ['card' => $card])">
                    <x-form-input name="title" :label="__('card.title')" :value="$card->title"/>

                    <x-form-select name="type" :options="getCardTypes()" label="Select the card type" :default="$card->type"/>

                    <x-form-submit />
                </x-form>
            </x-widget>
            <x-widget-spacer />
            @switch($card->cardable_type)
                @case(\App\Models\Profile::class)
                    <x-card.profile :card="$card" />
                    @break

                @case('file')
                    <x-card.file file="$card->cardable" />
                    @break

                @case('redirect')
                    <x-card.redirect redirect="$card->cardable" />
                        @break

                @default
                    {{ $card->type }}
            @endswitch
        </div>
    </div>
</x-app-layout>
