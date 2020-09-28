<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\User;
use Illuminate\Queue\SerializesModels;

class WelcomeStudent extends Mailable
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return $this->markdown('emails.student')->with('user',$user);
    }
}
