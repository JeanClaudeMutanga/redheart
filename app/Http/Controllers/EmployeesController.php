<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Individual;
use App\Medicals;
use App\RedCards;
use App\User;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $user->Status = $status;
        $user->save();
        Mail::to($user->email)->send(new WelcomeMail());
        return redirect('/home')->with('user', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
