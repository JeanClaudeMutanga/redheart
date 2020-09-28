<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeStudent;
use App\Student;
use App\Guardian;
use App\Medicals;
use App\OptGuardian;
use App\Recipients;
use App\RedCards;
use App\User;
use App\Payments;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class PaymentsController extends Controller
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

    public function ready(Request $request,$id)
    {
        $student = Student::find($id);
        return view('profile.student.payment')->with('student',$student);
    }

    public function proceed(Request $request,$id)
    {
        $payment = Payments::find($id);
        $request->session()->put('pay', $id);
        return view('profile.student.confirm')->with('payment',$payment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        // Available alpha characters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
             . mt_rand(1000000, 9999999)
             . $characters[rand(0, strlen($characters) - 1)];
 
        // shuffle the result
        $string = str_shuffle($pin);
        //-------end generating pin 

        $user_id = auth()->user()->id;
        $status = "Incomplete";

        $payment = new Payments();
        $payment->user_id = $user_id;
        $payment->student_id = $id;
        $payment->ref = $string;
        $payment->amount = $request->input('amount');
        $payment->phone = $request->input('phone');
        $payment->description = $request->input('description');
        $payment->status = $status;
        $payment->save();
        $payment_id = $payment->id;
        $request->session()->put('pay', $payment_id);
        return redirect('/application/payment/proceed/'.$payment_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function success(Request $request)
    {

        $status = "Successful";
        $id = $request->session()->get('pay');

        if(empty($id)){
            return redirect()->back()->with('success', 'Initiate Payment First'); 
        }

        $payment = Payments::findOrFail($id);
        $payment->status = $status;
        $payment->save();

        Session::forget('pay');
        return view('profile.student.success');
    }

    public function failed(Request $request)
    {
        $status = "Unsuccessful";
        $id = $request->session()->get('pay');
        if(empty($id)){
            return redirect()->back()->with('success', 'Initiate Payment First'); 
        }
        $payment = Payments::findOrFail($id);
        $payment->status = $status;
        $payment->save();

        Session::forget('pay');
        return view('profile.student.failed');
        
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
