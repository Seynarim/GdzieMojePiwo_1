@extends('layouts.app')

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
<button  class="max-w-sm mx-auto mt-16 mb-4 ml-4 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
  <a href = "{{route('beers.create')}}">
    Dodaj nowe piwo
    </a>
</button>


<div class="relative overflow-x-auto mb-36">
<!-- BeersTable -->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$beer->id}}</td>
                        <td class="px-6 py-4">{{$beer->name}}</td>
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
@endsection