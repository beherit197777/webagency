<?php

// app/Mail/ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($formData)
    {
        $this->data = $formData;
    }

    public function build()
    {
        return $this->subject('Новая заявка с сайта')
                    ->view('emails.contact');
    }
}

