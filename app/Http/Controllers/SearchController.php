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
                $columns = Schema::getColumnListing('beers'); // Retrieve all columns in your table
    
                $query  
                    ->orWhere('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('producer', 'like', '%' . $searchTerm . '%');
            })->get();
        }
        return view('beers.fav', compact('results'));
    }


   


}

