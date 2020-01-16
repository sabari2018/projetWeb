<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public $mailchimp;
    public $listId = '8046498b1f';

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->middleware('auth');
        $this->mailchimp = $mailchimp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnes = $this->mailchimp->lists->members($this->listId)['data'];
        return view('backend.pages.newsletter.index', compact('abonnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.newsletter.add');
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
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {
            $options = [
                'list_id'   => $this->listId,
                'subject' => $request->input('subject'),
                'from_name' => 'Allo Docteur',
                'from_email' => 'allodocteur@gmail.com',
                'to_name' => 'Abonnes'
            ];

            $content = [
                'html' => $request->input('message'),
                'text' => strip_tags($request->input('message'))
            ];


            $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);
            $this->mailchimp->campaigns->send($campaign['id']);

            /*$time = Carbon::now()->addMinutes(2)
                ->format('Y-m-d\TH:i:s+00:00');

            $this->mailchimp->campaigns->schedule($campaign['id'], $time);*/


            return redirect('admin/newsletters')->with('success','Campagne creer avec succes');


        } catch (Exception $e) {
            return redirect('newsletters.index')->back()->with('error','Erreur MailChimp');
        }
    }

}
