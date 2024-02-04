<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pubs;
use App\Models\Beer;
use Illuminate\Support\Facades\Schema; 


class SearchController extends Controller
{
    public function BeerSearch(Request $request)
    {
        $searchTerm = $request->input('search');
        if (!$searchTerm) {
            $results = collect(); 
        } else {
            $results = beer::where(function ($query) use ($searchTerm) {
                $columns = Schema::getColumnListing('beers'); 
    
                $query  
                    ->orWhere('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('producer', 'like', '%' . $searchTerm . '%');
            })->get();
        }
        return view('beers.fav', compact('results'));
    }
    public function PubSearch(Request $request)
    {
        $searchTerm = $request->input('search');
        if (!$searchTerm) {
            $results = collect(); 
        } else {
            $results = pubs::where(function ($query) use ($searchTerm) {
                $columns = Schema::getColumnListing('pubs'); 
    
                $query  
                    ->orWhere('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('adress', 'like', '%' . $searchTerm . '%');
            })->get();
        }
        return view('pubs.fav', compact('results'));
    }


   


}

