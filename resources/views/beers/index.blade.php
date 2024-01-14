@extends('layouts.master')

@section('content')


<!-- Message if edit succed -->
<div>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>

<!-- CREATE A BEER BUTTON -->
<button  class="ml-4 inline-flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-amber-500 rounded-lg hover:bg-amber-500 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
  <a href = "{{route('beers.create')}}">
    Dodaj nowe piwo
    </a>
</button>


<div class="relative overflow-x-auto">
<!-- BeersTable -->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Nazwa</th>
            <th scope="col" class="px-6 py-3">Producent</th>
            <th scope="col" class="px-6 py-3">Typ</th>
            <th scope="col" class="px-6 py-3">Opis</th>
            <th scope="col" class="px-6 py-3 text-center">Obraz</th>
            <th scope="col" class="px-6 py-3">Edytuj</th>
            <th scope="col" class="px-6 py-3">Usuń</th>
            </tr>
            <thead>
                @foreach($beers as $beer )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{$beer->id}}</td>
                        <td class="px-6 py-4 dark:text-white">{{$beer->name}}</td>
                        <td class="px-6 py-4">{{$beer->producer}}</td>
                        <td class="px-6 py-4">{{$beer->type}}</td>
                        <td class="px-6 py-4">{{$beer->description}}</td>
                        <!-- Image -->
                        <td class=> 
                            <a href="{{ route('beer.details', ['beer' => $beer]) }}">
                                <img 
                                src="{{ asset($beer->ImageUrl) }}" 
                                class="object-contain h-16 mx-auto"
                                alt="{{ $beer->name }}" >
                            </a> 
                        </td>
                        <!-- EDIT BUTTON -->
                        <td class="px-6 py-4">
                            <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-full">
                                <a href="{{route('beers.edit', ['beer' => $beer])}}">Edytuj</a>
                            </button>
                        </td>
                        <!-- DELETE BUTTON -->
                        <td class="px-6 py-4 ">
                        <form action="{{route('beers.delete', ['beer' => $beer ])}}" method="post">
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