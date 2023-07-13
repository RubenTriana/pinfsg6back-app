<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendPost extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
    * Create a new message instance. *
    * @return void
    */
    public function __construct($details)
    {
        $this->details = $details;
    }
    /**
    /**
    * Build the message. *
    * @return $this
    */
    public function build()
    {
        return $this->subject('Curso 2205 - g6')
            ->view('mail.registroPersona');
    }
}
