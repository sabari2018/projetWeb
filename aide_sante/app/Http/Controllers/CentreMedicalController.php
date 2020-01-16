<?php

namespace App\Http\Controllers;

use App\CentreMedical;
use Illuminate\Http\Request;

class CentreMedicalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

}
