<!-- HOME -->






    <!-- Search Form -->
    <form method="GET" action="{{ route('search.beer') }}">
        @csrf
        <input type="text" name="search" placeholder="Enter search term">
        <button type="submit">Search</button>
    </form>

    <!-- Display Search Results -->
    @if(isset($results))
        <h2>Search Results</h2>
        @if($results->isEmpty())
            <p>No results found.</p>
            @else
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 md:grid-cols-2">
                @foreach($results as $result)
                    <div class="relative bg-white rounded-2xl dark:bg-gray-700">
                        <div class="w-full h-56 px-4 pt-4">
                            <img src="{{ $result->ImageUrl }}" alt="{{ $result->name }}"
                                class="object-cover w-full h-full rounded-lg ">
                        </div>
                        <div>
                            <div class="p-4">
                                <div class="mb-3">
                                    <a href="#">
                                        <h2 class="text-2xl font-semibold dark:text-gray-300">
                                            {{ $result->name }}
                                        </h2>
                                    </a>
                                </div>
                                <p class="pb-4 text-base font-base text-gray-700 dark:text-gray-400">
                                    {{ $result->producer }}
                                </p>
                                <p class="pb-4 text-base font-base text-gray-700 dark:text-gray-400">
                                    {{ $result->description }}
                                </p>
                            </div>
                            <div class="flex items-center justify-end">
                                <a href="{{ route('beer.details', ['beer' => $result]) }}"
                                    class="absolute bottom-0 right-0 px-3 py-4 text-sm text-gray-100 bg-yellow-600 rounded-tl-2xl rounded-br-2xl hover:bg-indigo-700 hover:text-gray-100">
                                    Wyszukaj Puby
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif

