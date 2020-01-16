<?php

namespace App\Http\Controllers;

use App\TypeUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
