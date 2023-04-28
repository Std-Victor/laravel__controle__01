<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreValidation;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $livres = Livre::query();

        if($request->has('title')){
            $livres->where('titre', 'like', '%'.$request->title.'%');
        }

        $livres = $livres->get();

        return view('livre.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivreValidation $request)
    {
        $path = $request->file('couverture')->store('pictures');
        $request['couverture'] = $path;
        $livre = Livre::create($request);
        return view('livre.show', compact('livre'))->with('msg', 'livre a été ajouter!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        return view('livre.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        return view('livre.edit', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LivreValidation $request, Livre $livre)
    {
        $livre = Livre::find($livre->id)->update($request->only('titre', 'auteur', 'prix', 'annee'));
        return view('livre.show', compact('livre'))->with('msg','livre a été mis a jouré !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        Livre::findOrFail($livre->id)->delete();
        return redirect()->route('livres.index')->with('msg', 'livre a été supprimer!!');
    }

}
