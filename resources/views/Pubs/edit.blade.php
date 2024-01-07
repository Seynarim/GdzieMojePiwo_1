@extends('layouts.master')

@section('content')

<body>
<h1>Edit a Pub</h1>
<!-- check validation -->
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
    <form method="post" action="{{route('Pubs.update', ['Pub' => $Pub])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$Pub->name}}" />
        </div>
        <div>
            <label>adress</label>
            <input type="text" name="adress" placeholder="adress" value="{{$Pub->adress}}" />
        </div>
        <div>
            <label>adress_url</label>
            <input type="text" name="adress_url" placeholder="adress_url" value="{{$Pub->adress_url}}" />
        </div>
        <div>
            <label>google_url</label>
            <input type="text" name="google_url" placeholder="google_url" value="{{$Pub->google_url}}" />
        </div>
        <div>
            <label> image_url </label>
            <input type="text" name="image_url" placeholder="image_url" value="{{$Pub->image_url}}" />
        </div>
        <div>
            <label 
                for="beersselect"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select Beers:</label>
            <select
                id="countries_multiple" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                size-auto
                name="beers[]" 
                multiple>
                @foreach($beers as $beer)
                    <option value="{{ $beer->id }}" 
                        {{ in_array($beer->id, $Pub->beers->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $beer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>



</body>
</html>

@stop
