<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdaloadFileController extends Controller
{
    public function index(){

        return view('backend.testImage.index');
    }

    /** Fonction qui permet d'uploader un fichier
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request){
        $this->validate($request, [
            'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
        ]);

        $image = $request->file('select_file');

        $new_name = rand().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('profiles'), $new_name);

        return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}
