<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        @if ($header)
            <span class="text-2xl font-bold">{{$header}}</span>
        @endif

        {{ $slot }}
    </div>
</div>
