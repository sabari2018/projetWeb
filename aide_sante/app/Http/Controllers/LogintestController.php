<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LogintestController extends Controller
{
    public function index(){

        return view('backend.pages.login.index');
    }

    public function checkEmail(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!$user)
            return response()->json(['status' => 'failure']);
        else
            return response()->json(['status' => 'success']);
    }
}
