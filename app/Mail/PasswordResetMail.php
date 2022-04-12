<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
class Passwordresetmail extends Mailable
{
    use Queueable, SerializesModels;
    public $get_otp;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($get_otp,$user){
    
        $this->pass=$get_otp;
        $this->user=$user;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       return $this->subject('Password Reset')
            ->from('no_reply@fitmama')
            ->to($this->user->email)
            ->view('resetmail.passwordreset', ['one_time_pass'=> $this->pass , 'user' => $this->user]);
    }
}
