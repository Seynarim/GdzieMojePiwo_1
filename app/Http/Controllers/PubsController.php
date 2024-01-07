<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pubs;
use App\Models\Beer;
class PubsController extends Controller
{
    public function index(){
        $Pubs = Pubs::all();
        return view('Pubs.index', ['Pubs' => $Pubs]);
    }

    public function create(){
        return view('Pubs.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'adress_url' => 'required',
            'image_url' => 'nullable',
            'gmaps_url' => 'nullable',
        ]);
        //dd($data);
        $newPub = Pubs::create($data);
        return redirect(route('Pubs.index'));
    }

    public function edit(Pubs $Pub){
        $beers = Beer::all(); // Fetch all beers
        return view('Pubs.edit', compact('Pub', 'beers'));
    }

    public function update(Pubs $Pub, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'adress_url' => 'required',
            'image_url' => 'nullable',
            'gmaps_url' => 'nullable',

        ]);
        // Update pub attributes
        $Pub->update($data);
        // Sync the associated beers
        $Pub->beers()->sync($request->input('beers', []));

        return redirect(route('Pubs.index'))->with('success', 'Pub Updated Succesffully');
    }

    public function delete(Pubs $Pub){
        $Pub->delete();
        return redirect(route('Pubs.index'))->with('success', 'Pub deleted Succesffully');
    }

    public function details(Pubs $Pub){
        $Pub = Pubs::findOrFail($Pub->id);
        $beers = $Pub->beers;
        $modifiedIframe = preg_replace('/width="[^"]*"/', 'width="300"', $Pub->gmaps_url);
        $modifiedIframe = preg_replace('/height="[^"]*"/', 'height="200"', $modifiedIframe);
        return view('Pubs.details', compact('Pub', 'beers', 'modifiedIframe'));
    }


}
