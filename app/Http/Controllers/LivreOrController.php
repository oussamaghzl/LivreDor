<?php

namespace App\Http\Controllers;

use App\Models\LivreOr;
use Illuminate\Http\Request;

class LivreOrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = LivreOr::all();
        return view ('welcome', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view ('formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateForm= $request->validate([
            "nom"=>"string|required|max:20",
            "texte"=>"string|required|max:300",
            "note"=>"integer|required|min:1|max:5"
        ]);
        $newLivre = new LivreOr;
        
        $newLivre->nom = $request->nom;
        $newLivre->texte = $request->texte;
        $newLivre->note = $request->note;

        $newLivre->save();
        
        return redirect ('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivreOr  $livreOr
     * @return \Illuminate\Http\Response
     */
    public function show(LivreOr $livreOr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivreOr  $livreOr
     * @return \Illuminate\Http\Response
     */
    public function edit(LivreOr $livreOr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivreOr  $livreOr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivreOr $livreOr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivreOr  $livreOr
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivreOr $livreOr)
    {
        //
    }
}
