<?php

namespace App\Http\Controllers;

use App\User;
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
        $users = User::where('type_user_id',2)->get();
        return view('backend.pages.abonne.index', compact('users'));
    }

}
