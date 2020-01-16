<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterAbonnesController extends Controller
{

    public $mailchimp;
    public $listId = '8046498b1f';


    public function __construct(\Mailchimp $mailchimp){

        $this->mailchimp = $mailchimp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front._register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $this->validate($request, [
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'date' => 'required|date_format:Y-m-d',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'profil'  => 'required|image|mimes:jpg,png,JPEG,gif|max:2048',
            'captcha' => 'required|captcha'
        ], ['captcha.captcha'=>'Invalide captcha code.']
        );
        //dd($request);

       $user = new User;
       $user->nom = $request['nom'];
       $user->prenom = $request['prenom'];
       $user->email = $request['email'];
       $user->date_naissance = $request['date'];
       $user->type_user_id = 2;
       $user->adresse = '';
       $user->password = bcrypt( $request['password']);

        $image = $request->file('profil');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('profiles'), $new_name);

        $user->photo = $new_name;

        $user->save();

        if ($request['souscription'] == 'on')
            $this->souscrire($user->email);


        return redirect()->back();

    }


    private function souscrire($email)
    {
        try {
            $this->mailchimp
                ->lists
                ->subscribe(
                    $this->listId,
                    ['email' => $email]
                );

            return redirect()->back()->with('success','Email souscrit avec succes');


        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            return redirect()->back()->with('error','Email is Already Subscribed');
        } catch (\Mailchimp_Error $e) {
            return redirect()->back()->with('error','Error from MailChimp');
        }
    }

    /**Fonction qui permet de recharger le captcha
     * @return \Illuminate\Http\JsonResponse
     */
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
