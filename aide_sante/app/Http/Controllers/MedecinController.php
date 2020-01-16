<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Specialite;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MedecinController extends Controller
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
        $medecins = Medecin::all();
        return view('backend.pages.medecin.index', compact('medecins'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.medecin.add');
    }

    function fetch(Request $request)
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
                $output .= '<li><a href="#">'.$row->libelle.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function updatePhoto(Request $request){

        $medecin = Medecin::findOrFail($request->medecin_id);

        $old = $medecin->photo;
        if ($old !== 'default.png')
            Storage::delete(public_path($old));

        $photo = $request->file('file');

        $new_name = rand().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('profiles'), $new_name);

        $medecin->photo = $new_name;
        $medecin->save();

        return redirect('admin/medecins/'.$medecin->id);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'date_naissance' => 'required|date_format:Y-m-d',
            'select_photo'  => 'required|image|mimes:jpg,png,gif|max:2048'
        ]);


        $medecin = new Medecin;

        $medecin->nom = $request['nom'];
        $medecin->prenom = $request['prenom'];
        $medecin->specialite = $request['specialite'];
        $medecin->adresse = $request['adresse'];
        $medecin->email = $request['email'];
        $medecin->date_naissance = $request['date_naissance'];

        $image = $request->file('select_photo');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('profiles'), $new_name);

        $medecin->photo = $new_name;
        $medecin->save();

        return redirect('admin/medecins');
    }

    public function import(Request $request){

      /* $this->validate($request, [
            'data' => 'required|mimes:csv'
        ]);*/

        $file = $request->file('data');
        $datas = csvToArray($file);

        foreach ($datas as $data){


            $medecin = Medecin::firstOrNew([
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'specialite' => $data['specialite'],
                'adresse' => $data['adresse'],
                'email' => $data['email'],
                'date_naissance' => $data['date_naissance']
            ]);
            
            $medecin->photo = 'default.png';

            $medecin->save();

        }
        return redirect('admin/medecins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(Medecin $medecin)
    {
       return view('backend.pages.medecin.show', compact('medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medecin  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medecin $medecin)
    {
      return view('backend.pages.medecin.edit', compact('medecin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medecin $medecin)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'date_naissance' => 'required|date_format:Y-m-d'
        ]);

        $medecin->nom = $request['nom'];
        $medecin->prenom = $request['prenom'];
        $medecin->specialite = $request['specialite'];
        $medecin->adresse = $request['adresse'];
        $medecin->date_naissance = $request['date_naissance'];

        $medecin->save();
        return redirect('admin/medecins/'.$medecin->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medecin $medecin)
    {
        $medecin->delete();
        return redirect('admin/medecins');
    }
}
