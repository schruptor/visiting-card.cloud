<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.create.information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <x-form :action="route('information.store')">
                        <x-form-input type="hidden" name="card" :value="request('card')"/>

                        <x-form-select name="type" :options="getInformationTypes()" label="Select a Service" />

                        <x-form-input name="value" :label="__('profile.value')" />

                        <x-form-input name="color" :label="__('profile.color')" />

                        <x-form-submit />
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
