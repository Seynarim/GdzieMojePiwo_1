@extends('layouts.master')

@section('content')
    <!-- przycisk powrotu -->
    <div class="mt-5 ml-4">
        @include('elements.back_button')
    </div>

    <div class="flex flex-col lg:flex-row mt-8 lg:mt-16">
        <!-- Informacje o piwie -->
        <div class="w-full lg:w-1/2 p-4">
            <a href="{{ route('beer.details', ['beer' => $beer->id]) }}" class="p-7 max-w-lg min-w-[sm] border border-amber-500 rounded-2xl hover:shadow-xl hover:shadow-amber-50 flex flex-col items-center relative">
                <img src="{{ asset($beer->ImageUrl) }}" class="min-h-[150px] p-4 rounded-t-lg mx-auto">
                <div class="px-5 pb-5">
                    <h4 class="text-2xl font-semibold tracking-tight text-gray-700 dark:text-white">{{ $beer->name }}</h4>
                    <p class="text-s font-light text-gray-700 dark:text-white">Producent: {{ $beer->producer }}</p>
                    <p class="text-s font-light text-gray-700 dark:text-white">Typ Piwa: {{ $beer->type }}</p>
                </div>
            </a>
        </div>

        <!-- Galeria z barami -->
        <div class="flow-root mt-8 mb-36 p-4">
            @foreach($pubs as $pub)
                <div class="flow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="{{ route('Pubs.details', ['Pub' => $pub]) }}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-4">
                        <img src="{{ asset($pub->image_url) }}" class="object-cover w-32 h-32 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none">
                        <div class="flex flex-col justify-between p-4 leading-normal w-fix">
                            <div>    
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pub->name }}</h4>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Adres: {{ $pub->adress }}</p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pub->google_url }}</p>
                                <!-- BRAKUJE $modifiedIframe ROUTING DO POPRAWY -->
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Facebook: {{ $pub->adress_url }}</p>
                                
                            </div>
                        </div>
                    </a>
                </div>
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






  
    


