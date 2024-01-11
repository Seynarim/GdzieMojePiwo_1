@extends('layouts.master')

@section('content')

<!-- przycisk powrotu -->
<div class="mt-5 ml-4">
    @include('elements.back_button')
</div>

<div class="flex flex-col lg:flex-row ">
    <div class="w-full lg:w-1/2 p-4">
        <a class="p-7 max-w-lg min-w-[sm] border border-amber-500 rounded-2xl hover:shadow-xl hover:shadow-amber-50 flex flex-col items-center relative"
            >
            <img 
                src="{{ asset($beer->ImageUrl) }}" 
                class="min-h-[150px] p-4 rounded-t-lg mx-auto ">
            <div class="px-5 pb-5">
                <h4 class="text-2xl font-semibold tracking-tight text-gray-700 dark:text-white">{{$beer->name}}</h4>
                <p class="text-s font-light text-gray-700 dark:text-white">Producent: {{$beer->producer}}</p>
                <p class="text-s font-light text-gray-700 dark:text-white">Typ Piwa:{{$beer->type}}</p>
                
            </div>
        </a>
    </div>
    <!-- Galeria z barami -->
    <div class="w-full lg:w-1/2 flex flex-wrap justify-center">
        @foreach($pubs as $pub)
            <div class="w-1/1 md:w-1/2 lg:w-flex p-4">
                <a href="{{ route('Pubs.details', ['Pub' => $pub]) }}"  
                    class="p-8 max-w-lg border border-amber-500 rounded-2xl hover:shadow-xl hover:shadow-amber-50 flex flex-col items-center relative">
                    <img src="{{ asset($pub->image_url) }}" 
                        class="max-h-[150px] p-4 rounded-t-lg mx-auto">
                    <div class="mt-8">
                        <h4 class="text-2xl font-semibold tracking-tight text-gray-700 dark:text-white">{{ $pub->name }}</h4>
                        <p class="text-s font-light text-gray-700 dark:text-white">Adres: {{ $pub->adress }}</p>
                        <p class="text-s font-light text-gray-700 dark:text-white"> {{ $pub->google_url }}</p>
                        <!-- BRAKUJE $modifiedIframe ROUTING DO POPRAWY -->
                        <p class="text-s font-light text-gray-700 dark:text-white">Facebook: {{ $pub->adress_url }}</p>
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



  
    


