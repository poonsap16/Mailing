<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailhandshake extends Mailable
{
    use Queueable, SerializesModels;

    protected $username;
    protected $sms;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $sms)
    {
        $this->username = $username;
        $this->sms = $sms;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('simedicine.contact@gmail.com')
        //             ->view('emails.handshake')
        //             ->with([
        //                 'username' => 'simedicine.contact@gmail.com',
        //                 'sms' => 'mail',
        //             ]);

        return $this->from('simedicine.contact@gmail.com')
                    ->view('emails.handshake')
                    ->with([
                        'username' => $this->username,
                        'sms' => $this->sms,
                    ]);
    }
}
