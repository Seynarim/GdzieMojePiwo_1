<!-- HOME -->
@extends('layouts.master')

@section('content')


<!-- Treść aplikacji -->
    <div class="container mx-auto mt-8 p-4">

        <!-- Logo -->
        <div class="text-center">
            <img src="/img/logo_v2.png" alt="Gdzie Moje Piwo?" class="h-64 w-auto mx-auto">
        </div>

        <!-- Krótki opis -->
        <div class="text-center mt-4">
            <p class="text-xl text-gray-600">Znajdź swoje ulubione piwo i odkrywaj nowe miejsca!</p>
        </div>
        
        <!-- Okno wyszukiwania -->
        <div class="mt-8">
            @include('search.index')
        </div>


    </div>


    
@endsection



    


