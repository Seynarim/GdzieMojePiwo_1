@extends('layouts.app')

@section('content')

    <div class="max-w-sm mx-auto mt-16">
        <h1 class="block mb-2 text-2xl text-center font-medium text-gray-900">Edytuj Piwo</h1>

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
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nazwa</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="name" id="name" placeholder="Nazwa" value="{{ $beer->name }}">
            </div>

            <div class="mb-4">
                <label for="producer" class="block mb-2 text-sm font-medium text-gray-900">Producent</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="producer" id="producer" placeholder="Producent" value="{{ $beer->producer }}">
            </div>

            <div class="mb-4">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Typ</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="type" id="type" placeholder="Typ" value="{{ $beer->type }}">
            </div>

            <div class="mb-4">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Opis</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="description" id="description" placeholder="Opis" value="{{ $beer->description }}">
            </div>

            <div class="mb-4">
                <label for="ImageUrl" class="block mb-2 text-sm font-medium text-gray-900">ObrazURL</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="ImageUrl" id="ImageUrl" placeholder="ObrazURL" value="{{ $beer->ImageUrl }}">
            </div>

            <div class="mb-4">
                <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Aktualizuj</button>
            </div>
        </form>
    </div>
@endsection