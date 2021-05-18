<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Mail\MailResiveFormHome;
use App\Mail\MailSendFormHome;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormHome extends Component
{
    public $name;
    public $phone;
    public $email;
    public $site;

    protected $rules=[
        'name'=>'required|min:5',
        'phone'=>'required|min:10',
        'email'=>'required|email',
        'site'=>'required|min:5',
    ];
    public function updated(){
        $this->validate();

    }

    public function mailer(){
        Mail::to("$this->email")->send(new MailSendFormHome($this->name));
        mail::to('davoodkhany@gmail.com')->send(new MailResiveFormHome($this->name,$this->phone,$this->site,$this->email));
    }

    public function FormHome(){

        $this->mailer();
        $this->emit('FormHome',['name'=>"$this->name"]);

    }


    public function render()
    {
        return view('livewire.publics.layouts.component.form-home');
    }
}
