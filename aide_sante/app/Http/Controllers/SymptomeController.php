<?php

namespace App\Http\Controllers;

use App\Symptome;
use Illuminate\Http\Request;

class SymptomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptomes = Symptome::all();
        return view('backend.pages.symptome.index', compact('symptomes'));
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

    public function import(Request $request){

        $file = $request->file('data');
        $datas = csvToArray($file);

        foreach ($datas as $data){
            $maladie = Symptome::firstOrNew(['libelle' => $data['libelle']]);

            $maladie->save();
        }

        return redirect('admin/symptome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Symptome  $symptome
     * @return \Illuminate\Http\Response
     */
    public function show(Symptome $symptome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Symptome  $symptome
     * @return \Illuminate\Http\Response
     */
    public function edit(Symptome $symptome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Symptome  $symptome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $symptome = Symptome::findOrFail($request->id);

        $symptome->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Symptome  $symptome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptome $symptome)
    {
        $symptome->delete();
        return redirect('admin/symptome');
    }
}
