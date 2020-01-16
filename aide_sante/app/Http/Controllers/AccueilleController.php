<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Conseil;
use App\Mail\Contact;
use App\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AccueilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $conseils = Conseil::paginate(4);
        $actualites = Actualite::paginate(4);
        $medecins = Medecin::paginate(3);
        return view('front.index',compact('medecins','conseils','actualites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|min:5',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:5|max:500'
        ]);

        Mail::to('sadoubowil@gmail.com')
            ->send(new Contact($request->except('_token')));

        return back()->with('success', 'Merci de nous avoir contacter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showConseil($conseil)
    {
        $conseils = Conseil::where('id',$conseil)->get();
        $conseil = $conseils[0];
        return view('front.show.astuces', compact('conseil'));
    }

    public function showNews($actualite){

        $actualites = Actualite::where('id',$actualite)->get();
        $actualite = $actualites[0];
        return view('front.show.news', compact('actualite'));
    }

}
