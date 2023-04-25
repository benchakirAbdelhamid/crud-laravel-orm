<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $s = Stagiaire::all();
        // return $s;
        return view('showstagiaires',['s'=>$s]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('newstagiaires');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>"required",
            'age'=>"required",
            'work'=>"required"
        ]);
        $news = new Stagiaire();
        $news->name = $request->name;
        $news->age = $request->age;
        $news->work = $request->work;
        $news->save();
        return redirect('/stagiaires');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        $data = Stagiaire::find($stagiaire);
        return view('editstagiaires',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
        // echo $stagiaire->id;
        // echo $request;
        
        $prevdata = Stagiaire::find($stagiaire->id);

        echo $prevdata->name . '<br/>' ;
        echo $prevdata->age . '<br/>' ;
        echo $prevdata->work . '<br/>' ;
        echo $prevdata . '<br/>';

        echo $request->name . '<br/>' ;
        echo $request->age . '<br/>';
        echo $request->work . '<br/>';

        // $prevdata->name = 'newemail@example.com';;
        // $prevdata->name = $request->name;
        // $prevdata->age = $request->age;
        // $prevdata->work = $request->work;
        // $prevdata->save();
        
        // return redirect('/stagiaires');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        // echo $stagiaire;
        // $stagiaire = Stagiaire::find($stagiaire->id);
        // $stagiaire->delete();
    }
}
