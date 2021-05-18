<?php

namespace App\Http\Livewire\Publics;


use Livewire\Component;

use Artesaos\SEOTools\Facades\SEOMeta;
use OpenGraph;
use JsonLd;


class Index extends Component
{

    public function mount(){
        SEOMeta::setTitle('سئو سایت در قزوین - بهینه سازی سایت قزوین');
        SEOMeta::setDescription('ویدونا ارائه دهنده برترین خدمات در زمینه سئو سایت در قزوین و بهینه سازی وب سایت شما، شامل کلیه تکنیک های فنی به منظور افزایش ترافیک و درآمد زایی بیشتر.');
        SEOMeta::setCanonical('https://vidona.ir');

        OpenGraph::setTitle('سئو در قزوین - سئو حرفه ای در قزوین - سئو سایت شرکتی در قزوین');
        OpenGraph::setDescription('سئو سایت خو د را در قزوین به ما بسپارید. آنالیز رقبا، بررسی محتوا، لینک سازی داخلی و سئو خارجی در قزوین برای شما شما.');
        OpenGraph::setUrl('http://vidona.ir');
        OpenGraph::addProperty('type', 'homepage');
        JsonLd::setTitle('سئو در قزوین - سئو وبسایت در قزوین - سئو سایت در قزوین');
        JsonLd::setDescription('سئو سایت در قزوین را به ما بسپارید. شما میتوانید سئو سایت و پشتیبانی سایت خود را در قزوین به ما بسپارید.');
        JsonLd::setType('HomePage');
        JsonLd::addImage('');

    }

    public function render()
    {
        return view('livewire.publics.index');
    }

}
