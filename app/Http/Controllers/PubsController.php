<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pubs;

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
        return view('Pubs.edit', ['Pub' => $Pub]);
    }

    public function update(Pubs $Pub, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'adress_url' => 'required',
            'image_url' => 'nullable',
            'gmaps_url' => 'nullable',

        ]);

        $Pub->update($data);

        return redirect(route('Pubs.index'))->with('success', 'Pub Updated Succesffully');
    }

    public function delete(Pubs $Pub){
        $Pub->delete();
        return redirect(route('Pubs.index'))->with('success', 'Pub deleted Succesffully');
    }

    public function details(Pubs $Pub){
        //$Pub = Beer::findOrFail($beer);
        return view('Pubs.details', ['Pub' => $Pub]);
    }


}
