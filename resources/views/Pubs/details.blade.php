@extends('layouts.master')

@section('content')

<div class="mt-5">
    <button type="button" 
        class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-gray-900"
        id="ShowPubs"
        onclick="goBack()"
        >Powrót
    </button>
</div>
<h1>Pubs.Details</h1>
<div class="flex">
    <div class="w-1/4 p-4">
        <a class="p-8 max-w-lg border border-indigo-300 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
            >
            <img 
                src="{{ asset($Pub->image_url) }}" 
                class="shadow rounded-lg overflow-hidden border">
            <div class="mt-8">
                <h4 class="font-bold text-xl">{{$Pub->name}}</h4>
                <p class="mt-2 text-gray-600">Producent:{{$Pub->adress}}</p>
                <p class="mt-2 text-gray-600">Typ Piwa:{{$Pub->adress_url}}</p>
                {!! $modifiedIframe !!}
            </div>
        </a>
    </div>
   

    <!-- Galeria z piwami -->
    <div class="flex">
        @foreach($beers as $beer)
            <div class="w-1/3 p-4">
                <a href="{{ route('beer.details', ['beer' => $beer]) }}"  
                    class="p-8 max-w-lg border border-indigo-300 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center relative">
                    <img src="{{ asset($beer->ImageUrl) }}" 
                        class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-8">
                        <h4 class="font-bold text-xl">{{ $beer->name }}</h4>
                        <p class="mt-2 text-gray-600">Producent {{ $beer->producer }}</p>
                        <p class="mt-2 text-gray-600">typ: {{ $beer->type}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
</div>

<!-- JS Powróc do poprzedniego okna -->
<script>
    function goBack() {
        window.history.back();
    }
</script>


@stop



  
    


