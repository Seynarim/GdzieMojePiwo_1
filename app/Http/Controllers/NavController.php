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

    public function Bars(){
        return view('bars.index');
    }

    public function AboutUs(){
        return view('AboutUs.index');
    }

    public function Login(){
        return view('Login.index');
    }




}

