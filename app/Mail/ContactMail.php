<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $messageLines;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validatedData)
    {
        $this->firstname = $validatedData['firstname'];
        $this->lastname =  $validatedData['lastname'];
        $this->phone = $validatedData['phone'];
        $this->email = $validatedData['email'];
        $this->messageLines = explode("\n", $validatedData['message']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->view('mail-template');
    }
}
