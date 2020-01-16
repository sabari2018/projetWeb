<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
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
        $questionnaires = Questionnaire::all();
        return view('backend.pages.questionnaire.index', compact('questionnaires'));
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
            $maladie = Questionnaire::firstOrNew(['libelle' => $data['libelle']]);

            $maladie->save();
        }

        return redirect('admin/questionnaires');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $questionnaire = Questionnaire::findOrFail($request->id);

        $questionnaire->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire)
    {
        $questionnaire->delete();
        return redirect('admin/questionnaires');
    }
}
