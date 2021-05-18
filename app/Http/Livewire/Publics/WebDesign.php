<?php

namespace App\Http\Livewire\Publics;

use Livewire\Component;
use OpenGraph;
use JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

class WebDesign extends Component
{
    public function mount(){
        SEOMeta::setTitle("طراحی سایت در قزوین + طراحی اصولی و حرفه ای");
        SEOMeta::setDescription("طراحی سایت خود در قزوین را به شرکت ویدونا بسپارید شما می توانید بهترین وبسایت رو در کمترین زمان از ما دریافت کنید.");

        OpenGraph::setDescription("طراحی سایت خود در قزوین را به ما بسپارید، تا وبسایتی کاملا حرفه ای و اصولی برای شما طراحی شود.");
        OpenGraph::setTitle("طراحی سایت قزوین + طراحی کاملا حرفه ای");
        OpenGraph::addProperty('locale', 'fa_IR');

    }
    public function render()
    {
        return view('livewire.publics.web-design');
    }
}
