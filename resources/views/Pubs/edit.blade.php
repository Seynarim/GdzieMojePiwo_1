@extends('layouts.app')

@section('content')
<div class="max-w-sm mx-auto mt-16">
    <h1 class="block mb-4 text-2xl text-center font-medium text-gray-900">Edytuj Pub</h1>

    @if($errors->any())
    <div class="bg-red-500 p-4 mb-4 text-white rounded">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{ route('Pubs.update', ['Pub' => $Pub]) }}">
        @csrf
        @method('put')

        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nazwa</label>
            <input type="text" name="name" placeholder="Nazwa" value="{{ $Pub->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5">
        </div>

        <div class="mb-4">
            <label for="adress" class="block mb-2 text-sm font-medium text-gray-900">Adres</label>
            <input type="text" name="adress" placeholder="Adres" value="{{ $Pub->adress }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5">
        </div>

        <div class="mb-4">
            <label for="adress_url" class="block mb-2 text-sm font-medium text-gray-900">Facebook</label>
            <input type="text" name="adress_url" placeholder="Facebook URL" value="{{ $Pub->adress_url }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5">
        </div>

        <div class="mb-4">
            <label for="google_url" class="block mb-2 text-sm font-medium text-gray-900">Google URL</label>
            <input type="text" name="google_url" placeholder="Google URL" value="{{ $Pub->google_url }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5">
        </div>

        <div class="mb-4">
            <label for="image_url" class="block mb-2 text-sm font-medium text-gray-900">Obraz URL</label>
            <input type="text" name="image_url" placeholder="Obraz URL" value="{{ $Pub->image_url }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5">
        </div>

        <div class="mb-4">
            <label for="beersselect" class="block mb-4 text-xl text-center font-medium text-gray-900">Wybierz Piwa:</label>
            <div class="grid grid-cols-1 gap-4">
                @php
                    $sortedBeers = $beers->toArray();
                    usort($sortedBeers, function ($a, $b) use ($Pub) {
                        $aChecked = in_array($a['id'], $Pub->beers->pluck('id')->toArray());
                        $bChecked = in_array($b['id'], $Pub->beers->pluck('id')->toArray());

                        if ($aChecked && !$bChecked) {
                            return -1; // $a comes first if it's checked and $b is not
                        } elseif (!$aChecked && $bChecked) {
                            return 1; // $b comes first if it's checked and $a is not
                        } else {
                            return strcmp($a['name'], $b['name']); // Alphabetical order if both checked or unchecked
                        }
                    });
                @endphp

                @foreach($sortedBeers as $beer)
                <label class="block mb-2 text-sm font-medium text-gray-900">
                    <input type="checkbox" class="h-6 w-6 text-amber-500 border-gray-300 rounded focus:ring focus:ring-amber-200" name="beers[]" value="{{ $beer['id'] }}" {{ in_array($beer['id'], $Pub->beers->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <span class="ml-2">{{ $beer['name'] }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <div class="mb-36">
            <input type="submit" value="Aktualizuj" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        </div>
    </form>
</div>
@endsection
