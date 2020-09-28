<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Registered;
use App\Student;
use App\Guardian;
use App\Medicals;
use App\OptGuardian;
use App\Recipients;
use App\RedCards;
use App\User;
use App\Payments;
use App\Banks;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegularController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = 1;
        // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);
        //-------end generating pin 

        $student = new Student();
        $student->sub = $request->input('sub');
        $student->sub2 = $request->input('sub2');
        $student->owner = $request->input('owner');
        $student->ref =$string;
        $student->name = $request->input('fullnames');
        $student->dob =$request->input('dob');
        $student->school =$request->input('school');
        $student->grade = $request->input('Grade');
        $student->school_phone = $request->input('school_phone');
        $student->fax = $request->input('Fax');
        $student->school_address = $request->input('school_address');
        $student->save();

        $student_id = $student->id;


            $guardian = new Guardian();
            $guardian->student_id=$student_id;
            $guardian->relation = $request->input('relationship');
            $guardian->idnumber =$request->input('idnumber');
            $guardian->lastname =$request->input('lname');
            $guardian->address = $request->input('address');
            $guardian->email = $request->input('email');
            $sending = $request->input('email');
            $guardian->phone = $request->input('phone');
            $guardian->name = $request->input('name');
            $guardian->save();
            
            

            $optguardian = new OptGuardian();
            $optguardian->student_id=$student_id;
            $optguardian->relation = $request->input('relationship2');
            $optguardian->idnumber =$request->input('idnumber2');
            $optguardian->lastname =$request->input('lname2');
            $optguardian->address = $request->input('address2');
            $optguardian->email = $request->input('email2');
            $optguardian->phone = $request->input('phone2');
            $optguardian->name = $request->input('name2');
            $optguardian->save();

            $medicals = new Medicals();
            $medicals->student_id=$student_id;
            $medicals->provider = $request->input('medicalaid');
            $medicals->memberno =$request->input('number');
            $medicals->quickContact =$request->input('contact');
            $medicals->quickNumber = $request->input('contact_number');
            $medicals->quickContact2 = $request->input('contact2');
            $medicals->quickNumber2 = $request->input('contact_number2');
            $medicals->existing = $request->input('existing');
            $medicals->chronic = $request->input('chronic');
            $medicals->allergies = $request->input('Allergies');
            $medicals->save();

            $recepients = new Recipients();
            $recepients->student_id=$student_id;
            $recepients->name = $request->input('reciever');
            $recepients->phone =$request->input('reciever_phone');
            $recepients->email = $request->input('reciever_email');
            $recepients->address =$request->input('reciever_address');
            $recepients->save();

            
            $choice = $request->input('inlineRadioOptions');
            if($choice =="1stGeneration"){
                $amount = 70;
            }else{
                $amount = 130;
            }

            $redcards = new RedCards();
            $redcards->student_id=$student_id;
            $redcards->type =$request->input('inlineRadioOptions');
            $redcards->price =$amount;
            $redcards->policy_number=$student_id;
            $redcards->save();

            //Banking Details
            $banks = new Banks();
            $banks->student_id = $student_id;
            $banks->name = $request->input('bank_name');
            $banks->branch = $request->input('branch_code');
            $banks->account = $request->input('account');
            $banks->type = $request->input('account_type');
            $banks->consent = $request->input('consent');
            $banks->save();

            if(!empty($sending)){
            Mail::to($sending)->send(new Registered());   
            }
            

            //$data = Student::find($string);
            return redirect()->back()->with('success', 'Student Recorded Successfully'); 
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
