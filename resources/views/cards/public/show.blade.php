<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <div class="mb-4">
                    <x-jet-secondary-button>
                        {{ __('Download Profile') }}
                    </x-jet-secondary-button>
                </div>
                <div class="grid grid-cols-1">
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input class="mt-1 block w-full" :value="$card->user->name" disabled/>
                    </div>
                    @foreach($card->cardable->information as $singleInformation)
                        <div>
                            <x-jet-label :for="$singleInformation->type" value="{{ __($singleInformation->type) }}" />
                            <x-jet-input class="mt-1 block w-full" :value="$singleInformation->value" disabled/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
