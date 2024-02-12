@extends('layouts.app')

@section('content')



<!-- Message if edit succed -->
<div class="max-w-sm mx-auto mt-16">
    @if(session()->has('success'))
    <div class="bg-green-500 text-white font-bold px-4 py-2 rounded-lg mb-4">
        {{ session('success') }}
    </div>
    @endif
</div>

<!-- CREATE A Pub BUTTON -->
<button  class="max-w-sm mx-auto mt-4 mb-4 ml-4 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
  <a href = "{{route('Pubs.create')}}">
    Dodaj nowy Pub
    </a>
</button>


<div class="relative overflow-x-auto">
<!-- PubsTable -->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Nazwa</th>
            <th scope="col" class="px-6 py-3">Adres</th>
            <th scope="col" class="px-6 py-3">Facebook</th>
            <!-- <th scope="col" class="px-6 py-3">gmpasurl</th> -->
            <th scope="col" class="px-6 py-3 text-center">Obraz</th>
            <th scope="col" class="px-6 py-3">Edytuj</th>
            <th scope="col" class="px-6 py-3">Usuń</th>
            </tr>
            <thead>
                @foreach($Pubs as $Pub )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{$Pub->id}}</td>
                        <td class="px-6 py-4 dark:text-white">{{$Pub->name}}</td>
                        <td class="px-6 py-4">{{$Pub->adress}}</td>
                        <td class="px-6 py-4">{{$Pub->adress_url}}</td>
                        <!-- <td class="px-6 py-4">{{$Pub->gmaps_url}}</td> -->
                        <!-- Image -->
                        <td class=> 
                            <a href="{{ route('Pubs.details', ['Pub' => $Pub]) }}">
                                <img 
                                src="{{ asset($Pub->image_url) }}" 
                                class="object-contain h-16 mx-auto"
                                alt="{{ $Pub->name }}" >
                            </a> 
                        </td>
                        <!-- EDIT BUTTON -->
                        <td class="px-6 py-4">
                            <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-full">
                                <a href="{{route('Pubs.edit', ['Pub' => $Pub])}}">Edytuj</a>
                            </button>
                        </td>
                        <!-- DELETE BUTTON -->
                        <td class="px-6 py-4 ">
                        <form action="{{route('Pubs.delete', ['Pub' => $Pub ])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                            <input type="submit" value="Usuń"/>
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@stop
