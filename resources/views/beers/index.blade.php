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
<button  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  <a href = "{{route('beers.create')}}">
    Create a Beer
    </a>
</button>


<div class="relative overflow-x-auto">
<!-- BeersTable -->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Name</th>
            <th scope="col" class="px-6 py-3">Producer</th>
            <th scope="col" class="px-6 py-3">Type</th>
            <th scope="col" class="px-6 py-3">Description</th>
            <th scope="col" class="px-6 py-3 text-center">Image</th>
            <th scope="col" class="px-6 py-3">Edit</th>
            <th scope="col" class="px-6 py-3">Delete</th>
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
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full">
                                <a href="{{route('beers.edit', ['beer' => $beer])}}">Edit</a>
                            </button>
                        </td>
                        <!-- DELETE BUTTON -->
                        <td class="px-6 py-4 ">
                        <form action="{{route('beers.delete', ['beer' => $beer ])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                            <input type="submit" value="Delete"/>
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@stop