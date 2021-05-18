<?php

namespace App\Http\Livewire\Publics;

use Livewire\Component;

use Artesaos\SEOTools\Facades\SEOMeta;
use OpenGraph;
use JsonLd;

class ContactUs extends Component
{
    public function mount(){
        SEOMeta::setTitle('تماس با ما');
        SEOMeta::setDescription('برای بهینه سازی سایت خود با شرکت ویدونا تماس بگیرید. ');
        SEOMeta::setCanonical('http://vidona.ir/about-us');

        OpenGraph::setTitle('تماس با ما');
        OpenGraph::setDescription('برای بهینه سازی سایت خود با شرکت ویدونا تماس بگیرید. ');
        OpenGraph::setUrl('http://vidona.ir/about-us');
        OpenGraph::addProperty('type', 'about-us');
        JsonLd::setTitle('تماس با ما');
        JsonLd::setDescription('برای بهینه سازی سایت خود با شرکت ویدونا تماس بگیرید.');
        JsonLd::setType('about-us');
        JsonLd::addImage('');

    }
    public function render()
    {
        return view('livewire.publics.contact-us');
    }
}
