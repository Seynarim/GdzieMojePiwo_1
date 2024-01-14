@extends('layouts.master')

@section('content')
    <div class="container mx-auto mt-5">
        <!-- Przycisk powrotu -->
        <div class="mt-5 ml-4">
            <a href="{{ route('Pubs.index') }}" 
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

        <!-- Komunikat o błędzie -->
        @if($errors->any())
            <div class="bg-red-500 p-4 mb-4 text-white rounded">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formularz edycji pubu -->
        <form method="post" action="{{ route('Pubs.update', ['Pub' => $Pub]) }}">
            @csrf 
            @method('put')

            <table class="min-w-full">
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Nazwa:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="text" name="name" placeholder="Nazwa" value="{{ $Pub->name }}" class="border rounded p-2">
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="adress" class="block text-sm font-medium text-gray-700 dark:text-white">Adres:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="text" name="adress" placeholder="Adres" value="{{ $Pub->adress }}" class="border rounded p-2">
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="adress_url" class="block text-sm font-medium text-gray-700 dark:text-white">Facebook:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="text" name="adress_url" placeholder="Facebook URL" value="{{ $Pub->adress_url }}" class="border rounded p-2">
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="google_url" class="block text-sm font-medium text-gray-700 dark:text-white">Google URL:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="text" name="google_url" placeholder="Google URL" value="{{ $Pub->google_url }}" class="border rounded p-2">
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="image_url" class="block text-sm font-medium text-gray-700 dark:text-white">Obraz URL:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="text" name="image_url" placeholder="Obraz URL" value="{{ $Pub->image_url }}" class="border rounded p-2">
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <label for="beersselect" class="block text-sm font-medium text-gray-700 dark:text-white">Wybierz piwa:</label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
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
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-left">{{ $beer['name'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" 
                                                        class="h-6 w-6 text-amber-500 border-gray-300 rounded focus:ring focus:ring-amber-200"
                                                        name="beers[]" 
                                                        value="{{ $beer['id'] }}" 
                                                        {{ in_array($beer['id'], $Pub->beers->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="ml-4 mt-4">
                <input type="submit" value="Aktualizuj" class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">
            </div>
        </form>
    </div>
@stop