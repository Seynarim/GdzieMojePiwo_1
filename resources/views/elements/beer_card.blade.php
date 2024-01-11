<!-- resources/views/elements/beer_card.blade.php -->

<div class="w-full max-w-sm bg-white border border--200 rounded-lg shadow hover:shadow-xl hover:shadow-amber-50 dark:bg-gray-700 dark:border-gray-700">
    <a href="{{ route('beer.details', ['beer' => $beer->id]) }}">
        <img class="max-h-fit p-4 rounded-t-lg mx-auto" src="{{ $beer->ImageUrl }}" alt="{{ $beer->name }}" />
    </a>
    <div class="px-5 pb-5">
        <a href="{{ route('beer.details', ['beer' => $beer->id]) }}">
            <h5 class="text-2xl font-semibold tracking-tight text-gray-700 dark:text-white">{{ $beer->name }}</h5>
        </a>
        <div class="flex items-center mt-2.5 mb-5">
            
        </div>
        <div class="flex items-center justify-between">
            <span class="text-s font-light text-gray-700 dark:text-white">{{ $beer->type }}</span>
            <a href="{{ route('beer.details', ['beer' => $beer->id]) }}" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Znajdź Pub</a>
        </div>
    </div>
</div>
