@extends('layouts.master')

@section('content')

<h1>Beers.Details</h1>
<div class="mt-5">
    <button type="button" 
        class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-gray-900"
        id="ShowPubs"
        onclick="goBack()"
        >Powrót
    </button>
</div>
<div class="flex">
    <div class="w-1/4 p-4">
        <a class="p-8 max-w-lg border border-indigo-300 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
            >
            <img 
                src="{{ asset($beer->ImageUrl) }}" 
                class="shadow rounded-lg overflow-hidden border">
            <div class="mt-8">
                <h4 class="font-bold text-xl">{{$beer->name}}</h4>
                <p class="mt-2 text-gray-600">Producent:{{$beer->producer}}</p>
                <p class="mt-2 text-gray-600">Typ Piwa:{{$beer->type}}</p>
                <p class="mt-2 text-gray-600">{{$beer->description}}</p>
            </div>
        </a>
    </div>
    <!-- Galeria z barami -->
    <div class="flex">
    @foreach($pubs as $pub)
        <div class="w-1/3 p-4">
            <a href="{{ route('Pubs.details', ['Pub' => $pub]) }}"  
                class="p-8 max-w-lg border border-indigo-300 rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center relative">
                <img src="{{ asset($pub->image_url) }}" 
                    class="shadow rounded-lg overflow-hidden border">
                <div class="mt-8">
                    <h4 class="font-bold text-xl">{{ $pub->name }}</h4>
                    <p class="mt-2 text-gray-600">Address: {{ $pub->adress }}</p>
                    <p class="mt-2 text-gray-600">Google Maps URL: {{ $pub->google_url }}</p>
                    <p class="mt-2 text-gray-600">Address URL: {{ $pub->adress_url }}</p>
                    <!-- Add other details you want to display -->
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



  
    


