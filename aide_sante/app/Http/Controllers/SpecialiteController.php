<?php

namespace App\Http\Controllers;

use App\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function index()
    {
        return view('backend.testImage.search');
    }

    public function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('specialites')
                ->where('libelle', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
       <li><a href="#">'.$row->country_name.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

}
