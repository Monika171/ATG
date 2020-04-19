<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\atg;

class AtgMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$user = $this->user;
        $subject = 'Welcome';

        /*$this->withSwiftMessage(function ($message) use($user) {
            $message->user = $user;
      });*/

        return $this->view('emails.welcome')->subject($subject);
    }
}
