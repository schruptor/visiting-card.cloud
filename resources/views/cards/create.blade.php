<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.create.card') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <x-form :action="route('cards.store')">
                        <x-form-input name="title" :label="__('card.title')"/>

                        <x-form-input name="prename" :label="__('profile.prename')" />

                        <x-form-input name="name" :label="__('profile.name')" />

                        <x-form-input name="company" :label="__('profile.company')" />

                        <x-form-select name="type" :options="getCardTypes()" label="Select the CardType" />

                        <x-form-submit />
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
