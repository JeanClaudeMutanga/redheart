<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Individual;
use App\Medicals;
use App\RedCards;
use App\User;

class IndividualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('profile.individual.show')->with('user', $user);
        //return $user_id;
    }

    public function create(){
        return view('profile.individual.create');
    }

    public function store(Request $request){

         // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);
        $user_id = auth()->user()->id;
        $status = 1;

        $individual = new Individual;
        $individual->user_id=$user_id;
        $individual->phone= $request->input('phone');
        $individual->occupation= $request->input('Occupation');
        $individual->next_kin= $request->input('nok');
        $individual->nex_phone= $request->input('nokphone');
        $individual->next_kin2= $request->input('nok2');
        $individual->nex_phone2= $request->input('nokphone2');
        $individual->save();
        

        $medicals = new Medicals();
        $medicals->user_id=$user_id;
        $medicals->provider = $request->input('medicalaid');
        $medicals->memberno =$request->input('number');
        $medicals->existing = $request->input('existing');
        $medicals->chronic = $request->input('chronic');
        $medicals->allergies = $request->input('Allergies');
        $medicals->save();

        $redcards = new RedCards();
        $redcards->user_id = $user_id;
        $redcards->type =$request->input('inlineRadioOptions');
        $redcards->policy_number=$string;
        $redcards->save();

        $user = User::find($user_id);
        $user->dealer = $request->input('country_name');
        $user->Status = $status;
        $user->save();
        Mail::to($user->email)->send(new WelcomeMail());
        //return view('profile.individual.show')->with('user', $user);
        return view('profile.individual.show',[
            'user'=> $user,
            'success'=>'Application Submitted Successfully'
        ]);
    }
}
