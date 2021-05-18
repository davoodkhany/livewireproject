<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailResiveFormHome extends Mailable
{
    use Queueable, SerializesModels;

        public $name;
        public $phone;
        public $site;
        public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone,$site,$email)
    {
       $this->name=$name;
       $this->phone=$phone;
       $this->site=$site;
       $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Support@vidona.com','ویدونا')
        ->subject('وب سایت ارسالی جدید')
        ->markdown('emails.MailResiveFormHome')
        ->with([
            'name'=>$this->name,
            'email'=>$this->email,
            'site'=>$this->site,
            'phone'=>$this->phone
        ]);
    }
}
