<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function Home(){
        return view('Home');
    }
    public function Admin(){
        return view('Admin');
    }

    public function Pubs(){
        return view('Pubs.index');
    }

    public function AboutUs(){
        return view('AboutUs.index');
    }

    public function Login(){
        return view('Login.index');
    }

    public function FavBeers(){
        return view('beers.fav');
    }

    public function FavPubs(){
        return view('Pubs.fav');
    }




}

