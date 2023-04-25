<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ==> get all and show in views
        // $data = Livre::all();
        // return view('stg.showStg',['stgs'=>$data]);
        // ==> get all and show in views with where condition
        // $data = Livre::where('age','>=',10)->take(10)->get();
        // return view('stg.showStg',['stgs'=>$data]);

        // return Livre::all();
        // return Livre::find(3); // find id primary key
        // return Livre::where('prix','>=',2)->take(1)->get(); 
        // return Livre::where('prix','>=',2)->take(2)->get(); 
        return Livre::where('prix','>=',2)->get(); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Livre = new Livre();
        $Livre->nom = $request->nom;
        $Livre->prenom = $request->prenom;
        $Livre->age = $request->age;
        $Livre->save();
        return response('le livre est ajouter !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
