@extends('layouts.app')

@section('content')

    
<div class="flow-root mt-2 mb-36 p-4">
        <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Informacje o pojedynczym piwie -->
            <div class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-4">
                <a href="{{ route('beer.details', ['beer' => $beer->id]) }}" class="flex items-center block">
                    <img class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none" src="{{ asset($beer->ImageUrl) }}" alt="{{ $beer->name }}">
                    <div class="flex flex-col justify-between p-4 leading-normal w-fix ml-4">
                        <div>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $beer->name }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $beer->type }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

                    <!-- Lista pubów -->
                    <div class="flow-root mt-4">
                        <h2 class="text-xl font-semibold tracking-tight mb-4">Puby, w których dostępne jest to piwo:</h2>
                        <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($pubs as $pub)
                                <a href="{{ route('Pubs.details', ['Pub' => $pub]) }}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-4 mb-4">
                                    <img class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none" src="{{ asset($pub->image_url) }}" alt="{{ $pub->name }}">
                                    <div class="flex flex-col justify-between p-4 leading-normal w-full ml-4">
                                        <div>
                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pub->name }}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Adres: {{ $pub->adress }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

