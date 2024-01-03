@extends('layouts.master')

@section('content')

<body>
    <h1> Pubs Create </h1>
    <!-- komunikat o błędzie -->
    <div>        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <!-- Form do dodawania piw -->
    <form method="post" action="{{route('Pubs.store')}}">
        @csrf
        @method('post') 
        <div>
            <label> Name </label>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div>
            <label> adress </label>
            <input type="text" name="adress" placeholder="adress" />
        </div>
        <div>
            <label> adress_url</label>
            <input type="text" name="adress_url" placeholder="adress_url" />
        </div>
        <div>
            <label> Image_url </label>
            <input type="text" name="image_url" placeholder="image_url" />
        </div>
        <div>
            <label> gmaps_url </label>
            <input type="text" name="gmaps_url" placeholder="gmaps_url" />
        </div>
        <div>
            <input type="submit" value="save a new Pub" />
        </div>

</body>


        @stop

