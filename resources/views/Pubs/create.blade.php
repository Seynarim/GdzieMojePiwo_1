@extends('layouts.app')

@section('content')

    <div class="ml-4 mx-auto mt-5">
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
