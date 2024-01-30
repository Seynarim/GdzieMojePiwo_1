@extends('layouts.app')

@section('content')

    <div class="ml-4 mx-auto mt-5">
        <h1 class="text-4xl font-semibold text-gray-600 mb-4">Dodaj nowe piwo</h1>

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

        {{-- Formularz do dodawania piw --}}
        <form method="post" action="{{ route('beers.store') }}">
            @csrf
            @method('post')

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600">Nazwa</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="name" id="name" placeholder="Nazwa">
            </div>

            <div class="mb-4">
                <label for="producer" class="block text-sm font-semibold text-gray-600">Producent</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="producer" id="producer" placeholder="Producent">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-semibold text-gray-600">Typ</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="type" id="type" placeholder="Typ">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600">Opis</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="description" id="description" placeholder="Opis">
            </div>

            <div class="mb-4">
                <label for="ImageUrl" class="block text-sm font-semibold text-gray-600">ObrazURL</label>
                <input type="text" class="w-fit p-2 border rounded-md" name="ImageUrl" id="ImageUrl" placeholder="ObrazURL">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-amber-500 text-white p-2 rounded-md">Zapisz piwo</button>
            </div>
        </form>
    </div>
    
@endsection
