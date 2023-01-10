<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.index.card') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Title
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Type
                                </th>
                                <th scope="col" class="py-3 px-6">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cards as $card)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="py-4 px-6 font-medium text-black whitespace-nowrap">
                                        {{ $card->title }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $card->readableCardType }}
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="{{ route('profile.public.show', ['uuid' => $card->uuid]) }}" class="font-medium hover:underline btn-dark-grey">View Profile</a>
                                        <a href="{{ route('cards.show', ['card' => $card->id]) }}" class="font-medium hover:underline btn-dark-grey">Show/Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
