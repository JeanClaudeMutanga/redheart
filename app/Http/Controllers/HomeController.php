<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Invites;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('user', $user);
        */

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if($user->type =="Cooperate"){
            $unconfirmd="Pending";
            $confimed = "Confirmed";
            //return view('home')->with('user', $user);
            //return 123;
            //$count = DB::table('invites')->where('user_id', '$user_id')->count();
            //return view('user.index', ['users' => $users]);

            
            $count = DB::table('invites')->where(['user_id'=>$user_id,
            'status'=> $unconfirmd
            ])->count();

            $confirmed = DB::table('invites')->where(['user_id'=>$user_id,
            'status'=> $confimed
            ])->count();
            

            return view('home',[
                'user'=> $user,
                'count' => $count,
                'confirmed'=> $confirmed
            ]);
        }
        else{
            return view('home')->with('user', $user);
        }
        

    }
}
