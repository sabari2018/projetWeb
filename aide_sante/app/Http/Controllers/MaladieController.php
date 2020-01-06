<?php

namespace App\Http\Controllers;

use App\Maladie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaladieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maladies = Maladie::all();
        return view('backend.pages.maladie.index', compact('maladies'));
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
            $maladie = Maladie::firstOrNew(['libelle' => $data['libelle']]);

            $maladie->save();
        }

        return redirect('admin/maladies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maladie  $malady
     * @return \Illuminate\Http\Response
     */
    public function show(Maladie $malady)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maladie  $malady
     * @return \Illuminate\Http\Response
     */
    public function edit(Maladie $malady)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maladie  $malady
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $malady = Maladie::findOrFail($request->id);

        $malady->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maladie  $malady
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maladie $malady)
    {
        $malady->delete();
        return redirect('admin/maladies');
    }

}
