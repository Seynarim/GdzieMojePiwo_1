@if(isset($beers))
    <h2>List of Beers</h2>
    @if($beers->isEmpty())
        <p>No beers found.</p>
    @else
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            @foreach($beers as $beer)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ $beer->ImageUrl }}" alt="{{ $beer->name }}">
                    <p>{{ $beer->name }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endif