<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <div class="mb-4">
                    <a href="{{ route('card.download', ['card' => $card->uuid]) }}" class="no-underline inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                        {{ __('Download Profile') }}
                    </a>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class=" col-span-4">
                        <div class="flex my-4">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                @svg('bi-person')
                            </span>
                            <input type="text" value="{{ $card->cardable->prename }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                        </div>
                        <div class="flex my-4">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                @svg('bi-person')
                            </span>
                            <input type="text" value="{{ $card->cardable->name }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                        </div>
                        <div class="flex my-4">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                @svg('bi-person')
                            </span>
                            <input type="text" value="{{ $card->cardable->company }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                        </div>
                        @foreach($card->cardable->information as $singleInformation)
                            @switch($singleInformation->type)
                                @case('whatsapp')
                                    <x-information.whatsapp.show :information="$singleInformation"/>
                                    @break

                                @case('telegram')
                                    <x-information.telegram.show :information="$singleInformation"/>
                                    @break
                            @endswitch
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
