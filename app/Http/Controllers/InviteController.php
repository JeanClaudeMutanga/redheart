<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invites;
use App\User;
use App\Mail\EmployeeInvite;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class InviteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending_status = "Pending";
        $user_id = auth()->user()->id;
        $pending = DB::table('invites')->where(['user_id'=>$user_id,
            'status'=> $pending_status
            ])->orderby('created_at')->get();

            //return $pending;
            
        
            return view('profile.cooperate.pending',[
                'pending'=> $pending
            ]);
    
    }

    public function confirmed()
    {

        $confirmed_status = "Confirmed";
        $user_id = auth()->user()->id;
        $confirmed = DB::table('invites')->where(['user_id'=>$user_id,
            'status'=> $confirmed_status
            ])->orderby('created_at')->get();

            //return $pending;
            
        
            return view('profile.cooperate.confirmed',[
                'confirmed'=> $confirmed
            ]);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('profile.cooperate.invite')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    { 
        $unconfirmd="Pending";
        $confimed="Confirmed";
        $status = "Pending";
        $co_id = auth()->user()->id;
        $user = User::find($co_id);
        $co_name = new User();
        $co_name = User::find($co_id)->name;
        $Invites = new Invites();
        $Invites->user_id = $co_id;
        $Invites->email = $request->input('email');
        $Invites->company= $co_name;
        $Invites->status = $status;
        $Invites->save();
        
    Mail::to($Invites->email)->send(new EmployeeInvite());
        
        $count = DB::table('invites')->where(['user_id'=>$co_id,
            'status'=> $unconfirmd
            ])->count();

            $confirmed = DB::table('invites')->where(['user_id'=>$co_id,
            'status'=> $confimed
            ])->count();
            

            return view('profile.cooperate.cooperate',[
                'user'=> $user,
                'count' => $count,
                'confirmed'=> $confirmed
            ]);

        //return view('profile.cooperate.cooperate');
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
        $in_id = $id;
        $status = "Confirmed";
        $Invites = Invites::find($in_id);
        $Invites->status = $status;
        $Invites->save();
        
        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $Invites->email;
        $user->company = $Invites->user_id;
        $user->type = "Employee";
        $user->save();

        return redirect('login');

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

    public function confirm($id)
    {
       $Invite = Invites::find($id);
       return view('profile.cooperate.confirm')->with('invite',$Invite);
    }


}
