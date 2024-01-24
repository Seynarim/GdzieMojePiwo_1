@extends('layouts.app')

@section('content')

    <div class="flow-root mt-2 mb-36 p-4">
        <div class="flow grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4">
            <!-- Informacje o pojedynczym pubie -->
            <div class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-4">
                
                    <div class="w-25 h-auto md:w-32 md:h-auto md:rounded-l-lg md:rounded-t-none">
                        <img src="{{ asset($Pub->image_url) }}" class="object-cover w-full h-full md:rounded-l-lg md:rounded-t-none">
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal w-full ml-4">
                        <div>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $Pub->name }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Adres: {{ $Pub->adress }}</p>
                            <div class="fb-page" data-href="{{ $Pub->adress_url }}" data-tabs="events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{ $Pub->adress_url }}" class="fb-xfbml-parse-ignore"><a href="{{ $Pub->adress_url }}">{{ $Pub->name }}</a></blockquote></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="w-full lg:w-full mt-4 mb-4 lg:w-full"></div>
         <!-- Wymiary zdefiniowane w pubs-controller  - iframe google-->
        {!! $modifiedIframe !!}
        <!-- Tutaj możesz dodać inne informacje o pubie -->

        <!-- Lista piw dostępnych w pubie -->
        <div class="flow-root mt-6">
            <h2 class="text-xl font-semibold tracking-tight mb-6">Piwa dostępne w tym pubie:</h2>
            <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($beers as $beer)
                    <a href="{{ route('beer.details', ['beer' => $beer->id]) }}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-4 mb-4">
                        <img class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none" src="{{ $beer->ImageUrl }}" alt="{{ $beer->name }}">
                        <div class="flex flex-col justify-between p-4 leading-normal w-full ml-4">
                            <div>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $beer->name }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $beer->type }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
