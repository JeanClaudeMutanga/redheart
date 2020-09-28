<?php

namespace App\Mail;

use Illuminate\Http\Request;
use App\School;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class PocketCashMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $email = $request->session()->get('key');
        $school = DB::table('schools')->where('email', $email)->first();
        
        return $this->markdown('emails.WelcomeToPocketCash')->with('school',$school);
    }
}
