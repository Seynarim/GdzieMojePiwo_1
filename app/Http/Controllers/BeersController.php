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

    public function details(beer $beer){
        //$beer = Beer::findOrFail($beer);
        return view('beers.details', ['beer' => $beer]);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search'); // Assuming you're using a form with a 'search' input field
        if (!$searchTerm) {
            $results = collect(); // or any default value you prefer
        } else {
            $results = beer::where(function ($query) use ($searchTerm) {
                $columns = Schema::getColumnListing('beers'); // Retrieve all columns in your table
    
                foreach ($columns as $column) {
                    $query->orWhere($column, 'like', '%' . $searchTerm . '%');
                }
            })->get();
        }
        return view('/home', compact('results'));
    }

}