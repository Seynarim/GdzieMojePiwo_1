<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;

class HomeController extends Controller
{
    public function index()
    {
        $beers = Beer::all();

        return view('home', ['beers' => $beers]);
    }
}
