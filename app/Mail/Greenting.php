<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Greenting extends Mailable
{
    use Queueable, SerializesModels;

    protected $username;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('simedicine.contact@gmail.com')
                    ->markdown('emails.greeting')
                    ->with([
                        'username' => $this->username
                    ]);
    }
}
