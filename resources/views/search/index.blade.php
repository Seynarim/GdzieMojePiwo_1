<!-- HOME -->




<form class="box-border mx-auto max-w-7xl h-100 w-100 p-6 border-0" method="GET" action="{{ route('search.beer') }}">   
    @csrf
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Szukaj</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input 
            type="text" 
            id="default-search" 
            name="search"
            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-amber-600 focus:border-amber-600" 
            placeholder="Szukaj..." 
            required>
        <button type="button" class="text-white absolute end-2.5 bottom-2.5 bg-amber-500 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            <span class="sr-only">Icon description</span>
        </button>
    </div>
</form>




    <!-- Display Search Results -->
    @if(isset($results))
        <h1 class="block mb-2 text-2xl text-center font-medium text-gray-900">Wyniki wyszukiwania</h1>
        @if($results->isEmpty())
            <h2 class="block mb-2 text-2xl text-center font-medium text-gray-900">Nie odnaleziono</h2>
        @else
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 md:grid-cols-2">
            @foreach($results as $result)
                <div class="relative bg-white rounded-2xl">
                    <div class="w-full h-56 px-4 pt-4">
                        <img src="{{ $result->ImageUrl }}" alt="{{ $result->name }}"
                            class="object-cover w-full h-full rounded-lg ">
                    </div>
                    <div>
                        <div class="p-4">
                            <div class="mb-3">
                                <a href="#">
                                    <h2 class="text-2xl font-semibold">
                                        {{ $result->name }}
                                    </h2>
                                </a>
                            </div>
                            <p class="pb-4 text-base font-base text-gray-700">
                                {{ $result->producer }}
                            </p>
                            <p class="pb-4 text-base font-base text-gray-700">
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

