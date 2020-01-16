<?php

namespace App\Http\Controllers;

use App\TypeCentreMedical;
use Illuminate\Http\Request;

class TypeCentreMedicalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
