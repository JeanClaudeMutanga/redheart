<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class AdminController extends Controller
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

    public function schools()
    {
        $schools = School::latest()->paginate(10);
        return view('profile.admin.red')->with('schools',$schools);
    }

    public function students()
    {
        $students = Student::latest()->paginate(10);
        return $students;
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
    
    public function school($id)
    {
        $school = School::find($id);
        return view('profile.admin.school')->with('school',$school);
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
    
    public function sub(Request $request, $id)
    {
        $school = School::find($id);
        $school->sub = $request->input('sub');
        $school->save();
        
        return redirect()->back();
    }
    
    public function sub2(Request $request, $id)
    {
        $school = School::find($id);
        $school->sub2 = $request->input('sub2');
        $school->save();
        
        return redirect()->back();
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
