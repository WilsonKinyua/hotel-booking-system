<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct(Request $request)
    // {
    //     $this->email = $request;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->subject('New Contact Mail')
    //                 ->from('wilsonk@gmail.com')
    //                 ->to("test@mailserver.domain")
    //                 ->view('admin.booking.index');
    // }
}
