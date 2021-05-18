<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Mail\MailContactUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;

    public function ContactUs(){
        Mail::to('davoodkhany@gmail.com')->send(new MailContactUs($this->name,$this->phone,$this->subject,$this->message));
        $this->emit('FormHome',['name'=>"$this->name"]);
    }
    public function render()
    {
        return view('livewire.publics.layouts.component.contact-us');
    }
}
