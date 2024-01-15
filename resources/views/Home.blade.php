<!-- HOME -->
@extends('layouts.app')

@section('content')


<img class="h-auto max-w-full mx-auto" src="/img/beerbaner.png" alt="image description">


    @include('search.index')

    <div class="mx-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($beers as $beer)
            @include('elements.beer_card', ['beer' => $beer])
        @endforeach
    </div>


    
@endsection



    


