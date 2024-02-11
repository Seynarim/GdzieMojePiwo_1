@extends('layouts.master')

@section('content')
    <!-- Góra ekranu -->
    <div class="fixed top-0 left-0 right-0 bg-white border-b border-gray-200 flex justify-between items-center p-4 z-10">
        
        <!-- Strzałka powrotu -->
        <a href="#" class="text-3xl" onclick="goBack()" >
            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
            </svg>
            
        </a>
        <!-- Napis wyniki wyszukiwania -->
        <h1 class="text-xl font-semibold tracking-tight">Piwa</h1>
        <!-- Ikona ustawień -->
        <a href="#" class="text-3xl">
            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M1 5h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 1 0 0-2H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2Zm18 4h-1.424a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2h10.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Zm0 6H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 0 0 0 2h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Z"/>
            </svg>
        </a>
    </div>

    <!-- Okno wyszukiwania -->
    <div class="mt-16">
        @include('search.BeersOnly')
    </div>

    @if(isset($results))
        <h1 class="block mb-2 text-2xl text-center font-medium text-gray-900">Wyniki wyszukiwania</h1>
        @if($results->isEmpty())
            <hr class="h-px my-8 bg-gray-200 border-1">
            <p class="block mb-2 text-xl text-center font-medium text-amber-600">Nie odnaleziono :( </p>
            <hr class="h-px my-8 bg-gray-200 border-1">
        @else
        <div class="flow-root mb-4 p-4">
            <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
                @foreach($results as $result)
                <a href="{{ route('beer.details', ['beer' => $result->id]) }}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 p-4">
                        <img class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none" src="{{ $result->ImageUrl }}" alt="{{ $result->name }}">
                        <div class="flex flex-col justify-between p-4 leading-normal w-fix">
                            <div>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $result->name }}</h5>
                                <p class="mb-3 font-normal text-gray-700">{{ $result->type }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        <h1 class="block mb-2 text-2xl text-center font-medium text-gray-900">Pozostałe Piwa</h1>
    @endif

    <!-- Lista piw jako poziome kafelki -->
    <div class="flow-root mb-36 p-4">
        <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
            @foreach($beers as $beer)
            <a href="{{ route('beer.details', ['beer' => $beer->id]) }}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 p-4">
                    <img class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none" src="{{ $beer->ImageUrl }}" alt="{{ $beer->name }}">
                    <div class="flex flex-col justify-between p-4 leading-normal w-fix">
                        <div>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $beer->name }}</h5>
                            <p class="mb-3 font-normal text-gray-700">{{ $beer->type }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>




    
@endsection

<!-- JS Powróc do poprzedniego okna -->
<script>
    function goBack() {
        window.history.back();
    }
</script>