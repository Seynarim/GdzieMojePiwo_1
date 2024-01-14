@extends('layouts.master')

@section('content')

<!-- przycisk powrotu -->
<div class="mt-5 ml-4">
<a href="{{route('Pubs.index')}}" 
    class="inline-flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-amber-500 rounded-lg hover:bg-amber-500 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
    id="ShowPubs"
    onclick="goBack()"
>
    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
    </svg>
    Powrót
</a>
</div>

    <div class="ml-4 container mx-auto mt-5">
        <h1 class="text-4xl font-semibold text-gray-600 mb-4">Dodaj nowy Pub</h1>

        {{-- Komunikat o błędzie --}}
        @if($errors->any())
            <div class="bg-red-500 p-4 mb-4 text-white rounded">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formularz dodawania pubu --}}
        <form method="post" action="{{ route('Pubs.store') }}">
            @csrf
            @method('post')

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600">Nazwa</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="name" id="name" placeholder="Nazwa" />
            </div>

            <div class="mb-4">
                <label for="adress" class="block text-sm font-semibold text-gray-600">Adres</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="adress" id="adress" placeholder="Adres" />
            </div>

            <div class="mb-4">
                <label for="adress_url" class="block text-sm font-semibold text-gray-600">Facebook</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="adress_url" id="adress_url" placeholder="Facebook" />
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-sm font-semibold text-gray-600">Obraz URL</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="image_url" id="image_url" placeholder="Obraz URL" />
            </div>

            <div class="mb-4">
                <label for="gmaps_url" class="block text-sm font-semibold text-gray-600">Google Maps URL</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="gmaps_url" id="gmaps_url" placeholder="Google Maps URL" />
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-amber-500 text-white p-2 rounded-md">Zapisz nowy Pub</button>
            </div>
        </form>
    </div>
@stop
