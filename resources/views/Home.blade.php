<!-- HOME -->
@extends('layouts.master')

@section('content')


<img class="h-auto max-w-full mx-auto" src="/img/beerbaner.png" alt="image description">


    @include('search.index')

    <div class="mx-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($beers as $beer)
            @include('elements.beer_card', ['beer' => $beer])
        @endforeach
    </div>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection



    


