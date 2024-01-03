<!-- HOME -->
@extends('layouts.master')

@section('content')


<h1>home</h1>

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
  <a href = "{{route('pubs.create')}}">
    Create a Beer
    </a>
</button>



@stop



  
    


