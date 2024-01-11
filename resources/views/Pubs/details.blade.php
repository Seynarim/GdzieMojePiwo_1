@extends('layouts.master')

@section('content')

<!-- przycisk powrotu -->
<div class="mt-5 ml-4">
    @include('elements.back_button')
</div>

<div class="flex flex-col lg:flex-row">
    <!-- Karta pubu -->
    <div class="w-full lg:w-1/2 p-4">
        <a class="p-7 max-w-lg min-w-[sm] border border-amber-500 rounded-2xl hover:shadow-xl hover:shadow-amber-50 flex flex-col items-center relative">
            <img 
                src="{{ asset($Pub->image_url) }}" 
                class="max-h-[200px] p-4 rounded-t-lg mx-auto">
            <div class="px-5 pb-5">
                <h4 class="text-2xl font-semibold tracking-tight text-gray-700 dark:text-white">{{$Pub->name}}</h4>
                <p class="text-s font-light text-gray-700 dark:text-white">{{$Pub->adress}}</p>
                <p class="text-s font-light text-gray-700 dark:text-white">{{$Pub->adress_url}}</p>
                <div class="w-full lg:w-full mt-4 lg:w-full"></div>
                <!-- Wymiary zdefiniowane w pubs-controller  - iframe google-->
                {!! $modifiedIframe !!}
            </div>
        </a>
    </div>

    <!-- Galeria z piwami -->
    <div class="w-full lg:w-1/2 flex flex-wrap">
        @foreach($beers as $beer)
            <div class="w-1/2 md:w-1/3 lg:w-flex p-4">
                <a href="{{ route('beer.details', ['beer' => $beer]) }}"  
                    class="p-8 max-w-xl border border-amber-500 rounded-2xl hover:shadow-xl hover:shadow-amber-50 flex flex-col items-center relative">
                    <img src="{{ asset($beer->ImageUrl) }}" 
                        class="rounded-lg overflow-hidden min-w-[100px]">
                    <div class="mt-8">
                        <h4 class="font-bold text-xl">{{ $beer->name }}</h4>
                        <p class="text-s font-light text-gray-700 dark:text-white">Producent:  {{ $beer->producer }}</p>
                        <p class="text-s font-light text-gray-700 dark:text-white">Typ: {{ $beer->type}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<!-- JS Powróc do poprzedniego okna -->
<script>
    function goBack() {
        window.history.back();
    }
</script>


@stop



  
    


