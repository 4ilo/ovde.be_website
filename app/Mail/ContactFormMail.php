<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $senderMail;
    public $senderName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->message = $data->vraag;
        $this->senderMail = $data->email;
        $this->senderName = $data->naam;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@ovde.be', 'Ovde.be')
                    ->markdown('emails.contact');
    }
}
