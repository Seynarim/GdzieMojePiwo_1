@extends('layouts.app')

@section('content')

    <div class="max-w-sm mx-auto mt-16">
        <h1 class="block mb-2 text-2xl text-center font-medium text-gray-900">Dodaj nowy Pub</h1>

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
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nazwa</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="name" id="name" placeholder="Nazwa" />
            </div>

            <div class="mb-4">
                <label for="adress" class="block mb-2 text-sm font-medium text-gray-900">Adres</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="adress" id="adress" placeholder="Adres" />
            </div>

            <div class="mb-4">
                <label for="adress_url" class="block mb-2 text-sm font-medium text-gray-900">Facebook</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="adress_url" id="adress_url" placeholder="Facebook" />
            </div>

            <div class="mb-4">
                <label for="image_url" class="block mb-2 text-sm font-medium text-gray-900">Obraz URL</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="image_url" id="image_url" placeholder="Obraz URL" />
            </div>

            <div class="mb-4">
                <label for="gmaps_url" class="block mb-2 text-sm font-medium text-gray-900">Google Maps URL</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5" name="gmaps_url" id="gmaps_url" placeholder="Google Maps URL" />
            </div>

            <div class="mb-4">
                <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Zapisz nowy Pub</button>
            </div>
        </form>
    </div>
@stop
