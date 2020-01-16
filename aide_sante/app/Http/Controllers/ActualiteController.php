<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::paginate(3);
        return view('backend.pages.actualite.index', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.actualite.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required|string|max:255',
            'description' => 'required|string|min:3|max:1000',
            'contenu' => 'required|string|min:3',
            'source' => 'required|string|min:3|max:1000',
            'lien' => 'required|string|max:255',
            'image'  => 'required|image|mimes:jpg,png,gif,jpeg|max:2048'

        ]);

        $actualite = new Actualite;
        $actualite->titre = $request['titre'];
        $actualite->description = strip_tags($request['description']);
        $actualite->contenue = strip_tags($request['contenu']);
        $actualite->source = strip_tags($request['source']);
        $actualite->lien = $request['lien'];

        $image = $request->file('image');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('actualites_images/'), $new_name);

        $actualite->image = $new_name;

        if ($request['visible'] === 'on')
            $actualite->visibilite = 1;
        else
            $actualite->visibilite = 0;

        $actualite->save();

        return redirect('admin/actualites');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('backend.pages.actualite.show',compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        return view('backend.pages.actualite.edit', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $this->validate($request, [
            'titre' => 'required|string|max:255',
            'description' => 'required|string|min:3|max:1000',
            'contenu' => 'required|string|min:3',
            'source' => 'required|string|min:3|max:1000',
            'lien' => 'required|string|max:255',
            'image'  => 'required|image|mimes:jpg,png,gif,jpeg|max:2048'

        ]);

        $actualite->titre = $request['titre'];
        $actualite->description = strip_tags($request['description']);
        $actualite->contenue = strip_tags($request['contenu']);
        $actualite->source = strip_tags($request['source']);
        $actualite->lien = $request['lien'];

        $old = $actualite->image;
        Storage::delete(public_path('actualites_images/'.$old));

        $image = $request->file('image');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('actualites_images/'), $new_name);

        $actualite->image = $new_name;

        if ($request['visible'] === 'on')
            $actualite->visibilite = 1;
        else
            $actualite->visibilite = 0;

        $actualite->save();

        return redirect('admin/actualites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect('admin/actualites');
    }
}
