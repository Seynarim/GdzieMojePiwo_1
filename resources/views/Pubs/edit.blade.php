@extends('layouts.master')

@section('content')

<body>
    <h1>Edit a Pub</h1>

    <!-- Check validation errors -->
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <!-- Form edit -->
    <form method="post" action="{{ route('Pubs.update', ['Pub' => $Pub]) }}">
        @csrf 
        @method('put')

        <table class="min-w-full">
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="name" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Name:
                        </label>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" 
                            name="name" 
                            placeholder="Name" 
                            value="{{ $Pub->name }}" 
                            class="border rounded p-2">
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="adress" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Address:
                        </label>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" 
                            name="adress" 
                            placeholder="Address" 
                            value="{{ $Pub->adress }}" 
                            class="border rounded p-2">
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="adress_url" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Address URL:
                        </label>
                    </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" 
                            name="adress_url" 
                            placeholder="Address URL" 
                            value="{{ $Pub->adress_url }}" 
                            class="border rounded p-2">
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="google_url" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Google URL:
                        </label>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" 
                            name="google_url" 
                            placeholder="Google URL" 
                            value="{{ $Pub->google_url }}" 
                            class="border rounded p-2">
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="image_url" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Image URL:
                        </label>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" 
                            name="image_url" 
                            placeholder="Image URL" 
                            value="{{ $Pub->image_url }}" 
                            class="border rounded p-2">
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-left">
                        <label for="beersselect" 
                            class="block text-sm font-medium text-gray-700 dark:text-white">
                            Select Beers:
                        </label>
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
                                        <td class="px-6 py-4 whitespace-nowrap text-left">
                                            {{ $beer['name'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" 
                                                    class="h-6 w-6 text-blue-500 border-gray-300 rounded focus:ring focus:ring-blue-200"
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

        <div class="mt-4">
            <input type="submit" 
                value="Update" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>

</body>
</html>

@stop
