<?php

namespace App\Http\Controllers;

use App\Allergie;
use Illuminate\Http\Request;

class AllergieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
