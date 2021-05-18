<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $subject;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone,$subject,$message)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->subject=$subject;
        $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Support@vidona.com','ویدونا')
        ->subject('فرم ارسالی تماس با ما ')
        ->markdown('emails.MailContactUs')
        ->with([
            'name'=>$this->name,
            'phone'=>$this->phone,
            'subject'=>$this->subject,
            'message'=>$this->message
        ]);
    }
}
