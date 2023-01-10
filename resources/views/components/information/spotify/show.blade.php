<a href="https://open.spotify.com/user/{{ $information->value }}">
    <div class="flex my-4">
        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
            @svg($icon)
        </span>
        <input type="text" value="{{ $information->value }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5" disabled>
    </div>
</a>
