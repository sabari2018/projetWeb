<?php

namespace App\Http\Controllers;

use App\Conseil;
use Illuminate\Http\Request;

class ConseilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conseils = Conseil::paginate(4);
        return view('backend.pages.conseil.index', compact('conseils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.conseil.add');
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
            'description' => 'required|string|min:3|max:255',
            'lien' => 'required|string|max:255'
        ]);

        $conseil = new Conseil;

        $conseil->titre = $request['titre'];
        $conseil->description = strip_tags($request['description']);
        $conseil->lien = $request['lien'];

        $conseil->save();

        return redirect('admin/conseils');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function show(Conseil $conseil)
    {
        return view('backend.pages.conseil.show', compact('conseil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function edit(Conseil $conseil)
    {
        return view('backend.pages.conseil.edit', compact('conseil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conseil $conseil)
    {
        $this->validate($request, [
            'titre' => 'required|string|max:255',
            'description' => 'required|string|min:3|max:255',
            'lien' => 'required|string|max:255'
        ]);

        $conseil = new Conseil;

        $conseil->titre = $request['titre'];
        $conseil->description = strip_tags($request['description']);
        $conseil->lien = $request['lien'];

        $conseil->save();

        return redirect('admin/conseils');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conseil $conseil)
    {
        $conseil->delete();
        return redirect('admin/conseils');
    }
}
