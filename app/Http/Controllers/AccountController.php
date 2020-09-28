<?php

namespace App\Http\Controllers;
use App\Student;
use App\Guardian;
use App\Medicals;
use App\OptGuardian;
use App\Recipients;
use App\RedCards;
use App\User;
use Carbon\Carbon;
use App\Payments;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.student.students');
    }

    public function payments()
    {
        return view('profile.student.pay_accounts');
    }
    
    public function student($id)
    {
        $student = Student::FindOrFail($id);
        return view('profile.student.single')->with('student',$student);
    }
    
    public function paid($id)
    {
        $payments = Payments::query()->where('student_id',$id)->get();
        return view('profile.student.payments')->with('payments',$payments);
        return $payments;
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
