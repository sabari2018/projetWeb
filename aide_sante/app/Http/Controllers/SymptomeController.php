<?php

namespace App\Http\Controllers;

use App\Symptome;
use Illuminate\Http\Request;

class SymptomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
