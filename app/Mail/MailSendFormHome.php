<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSendFormHome extends Mailable
{
    use Queueable, SerializesModels;

    public $name ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Support@vidona.com','ویدونا')
        ->subject('پشتیبانی ویدونا')
        ->markdown('emails.MailSendFormHome')
        ->with([
            'name'=>$this->name
        ]);
    }
}
