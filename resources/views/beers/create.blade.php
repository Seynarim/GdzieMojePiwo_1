@extends('layouts.master')

@section('content')

<body>
    <h1> Beers Create </h1>
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
    <form method="post" action="{{route('beers.store')}}">
        @csrf
        @method('post') 
        <div>
            <label> Name </label>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div>
            <label> Producer </label>
            <input type="text" name="producer" placeholder="producer" />
        </div>
        <div>
            <label> type </label>
            <input type="text" name="type" placeholder="type" />
        </div>
        <div>
            <label> description </label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div>
            <label> ImageUrl </label>
            <input type="text" name="ImageUrl" placeholder="ImageUrl" />
        </div>
        <div>
            <input type="submit" value="save a new beer" />
        </div>

</body>


        @stop

