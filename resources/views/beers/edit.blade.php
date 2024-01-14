@extends('layouts.master')

@section('content')
    <!-- Przycisk powrotu -->
    <div class="mt-5 ml-4">
        <a href="{{ route('beers.index') }}" 
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
        <h1 class="text-4xl text-4xl font-semibold text-gray-600 mb-4">Edit a Beer</h1>

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

        {{-- Formularz edycji --}}
        <form method="post" action="{{ route('beers.update', ['beer' => $beer]) }}">
            @csrf
            @method('put')

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600">Nazwa</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="name" id="name" placeholder="Nazwa" value="{{ $beer->name }}">
            </div>

            <div class="mb-4">
                <label for="producer" class="block text-sm font-semibold text-gray-600">Producent</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="producer" id="producer" placeholder="Producent" value="{{ $beer->producer }}">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-semibold text-gray-600">Typ</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="type" id="type" placeholder="Typ" value="{{ $beer->type }}">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600">Opis</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="description" id="description" placeholder="Opis" value="{{ $beer->description }}">
            </div>

            <div class="mb-4">
                <label for="ImageUrl" class="block text-sm font-semibold text-gray-600">ObrazURL</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="ImageUrl" id="ImageUrl" placeholder="ObrazURL" value="{{ $beer->ImageUrl }}">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-amber-500 text-white p-2 rounded-md">Aktualizuj</button>
            </div>
        </form>
    </div>
@stop