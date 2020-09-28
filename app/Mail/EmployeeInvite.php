<?php

namespace App\Mail;
//data to view
use App\User;
use App\Invites;
//data to view
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class EmployeeInvite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = auth()->user()->id;
        $Invites = DB::table('invites')->orderBy('created_at', 'DESC')->where('user_id', $user)->first();

        return $this->markdown('emails.invite')->with('invites',$Invites);
    }
}
