<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailAnalyes extends Mailable
{
    use Queueable, SerializesModels;

    public $websiteAnalyes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($websiteAnalyes)
    {
        $this->websiteAnalyes=$websiteAnalyes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('Support@vidona.com', 'ویدونا')
                ->subject('vidona Support')
                ->markdown('emails.MailAnalyes')
                ->with([
                    'websiteAnalyes' => $this->websiteAnalyes,
                ]);
    }
}
