<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;
use Illuminate\Support\Facades\Schema; 

class BeersController extends Controller
{
    public function index(){
        $beers = Beer::all();
        return view('beers.index', ['beers' => $beers]);


    }

    // beersGrid *new*
    public function beersGrid() {
        $beers = Beer::all();
        return view('elements.beers_grid', ['beers' => $beers]);
    }

    public function create(){
        return view('beers.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'producer' => 'required',
            'type' => 'required',
            'description' => 'nullable',
            'ImageUrl' => 'nullable',
        ]);
        //dd($data);
        $newBeer = Beer::create($data);
        return redirect(route('beers.index'));
    }

    public function edit(Beer $beer){
        return view('beers.edit', ['beer' => $beer]);
    }

    public function update(beer $beer, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'producer' => 'required',
            'type' => 'nullable',
            'description' => 'nullable',
            'ImageUrl' => 'nullable',

        ]);

        $beer->update($data);

        return redirect(route('beers.index'))->with('success', 'beer Updated Succesffully');
    }

    public function delete(beer $beer){
        $beer->delete();
        return redirect(route('beers.index'))->with('success', 'beer deleted Succesffully');
    }

    public function details(beer $beer)
    {
        $beer = Beer::with('pubs')->findOrFail($beer->id);
        $pubs = $beer->pubs;
    
        return view('beers.details', compact('beer', 'pubs'));
    }
        
    public function search(Request $request)
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
        return view('/home', compact('results'));
    }
    public function try(){
    $beer = Beer::find(3); // Replace $beerId with the actual ID of the beer
    $pubs = [12]; // Replace with the IDs of the pubs you want to associate

    $beer->pubs()->sync($pubs);
    return view('/home');
    }
}