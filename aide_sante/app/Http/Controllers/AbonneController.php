<?php

namespace App\Http\Controllers;

use App\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.abonne.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonne $abonne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonne $abonne)
    {
        //
    }
}