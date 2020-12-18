<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSended extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($m)
    {
        $this->mail = $m;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('templates_mails.contact')->with([
            'email' => $this->mail->email,
            'emailSubject' => $this->mail->emailSubject,
            'text' => $this->mail->text
        ])->from('valentin@gmail.com');
    }
}
