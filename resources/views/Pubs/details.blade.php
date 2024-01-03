@extends('layouts.master')

@section('content')

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
                <p class="mt-2 text-gray-600">{{$Pub->gmaps_url}}</p>
                <div class="mt-5">
                    <button type="button" 
                        class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-gray-900"
                        id="ShowPubs"
                        onclick="goBack()"
                        >Powrót
                    </button>
                </div>
            </div>
        </a>
    </div>
    <div class="w-3/4 p-4"> 
        <div class="container mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-3">
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image"> bary itd
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image">bary itd
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image">bary itd
            </div>
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



  
    


