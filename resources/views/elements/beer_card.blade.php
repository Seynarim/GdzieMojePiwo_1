<!-- resources/views/elements/beer_card.blade.php -->

<a href="{{ route('beer.details', ['beer' => $beer->id]) }}">
    <div class="w-full max-w-sm bg-white border border-200 rounded-lg shadow hover:shadow-xl hover:shadow-amber-50">
        <img class="max-h-fit p-4 rounded-t-lg mx-auto" src="{{ $beer->ImageUrl }}" alt="{{ $beer->name }}" />
        <div class="px-5 py-4">
            <h5 class="text-xl font-semibold tracking-tight text-gray-700">{{ $beer->name }}</h5>
            <div class="flex items-center mt-2.5 mb-5">
                <!-- Dodaj elementy flex, jeśli są potrzebne -->
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-700">{{ $beer->type }}</span>
            </div>
        </div>
    </div>
</a>
