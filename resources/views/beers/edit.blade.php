@extends('layouts.master')

@section('content')

<body>
<h1>Edit a Beer</h1>
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
    <form method="post" action="{{route('beers.update', ['beer' => $beer])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$beer->name}}" />
        </div>
        <div>
            <label>producer</label>
            <input type="text" name="producer" placeholder="producer" value="{{$beer->producer}}" />
        </div>
        <div>
            <label>type</label>
            <input type="text" name="type" placeholder="type" value="{{$beer->type}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$beer->description}}" />
        </div>
        <div>
            <label> ImageUrl </label>
            <input type="text" name="ImageUrl" placeholder="ImageUrl" value="{{$beer->ImageUrl}}" />
        </div>
        <div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>

@stop
