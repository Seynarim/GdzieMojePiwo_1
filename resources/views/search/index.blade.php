<!-- HOME -->

@section('content')


<h1>Search.index</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('search.beer') }}">
        @csrf
        <input type="text" name="search" placeholder="Enter search term">
        <button type="submit">Search</button>
    </form>

    <!-- Display Search Results -->
    @if(isset($results))
        <h2>Search Results</h2>
        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->name }}</li>
                    <!-- Replace 'name' with the actual attribute you want to display -->
                @endforeach
            </ul>
        @endif
    @endif
@endsection