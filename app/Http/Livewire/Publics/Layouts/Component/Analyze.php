<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Mail\MailAnalyes;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Analyze extends Component
{

    public $websiteAnalyes;

    public function Analyes(){

        Mail::to('davoodkhany@gmail.com')->send(new MailAnalyes($this->websiteAnalyes));
        $this->emit('Analyes');

    }
    public function render()
    {
        return view('livewire.publics.layouts.component.analyze');
    }
}
