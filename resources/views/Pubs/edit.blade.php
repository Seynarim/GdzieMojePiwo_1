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
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>

@stop
