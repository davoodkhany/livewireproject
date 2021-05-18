<?php

namespace App\Http\Livewire\Publics;


use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use OpenGraph;
use JsonLd;


class OurTeam extends Component
{
    public function mount(){
        SEOMeta::setTitle('تیم ما در قزوین');
        SEOMeta::setDescription(' شما میتوانید سئو سایت و طراحی سایت خود را به تیم ما در قزوین بسپارید. ');
        SEOMeta::setCanonical('https://vidona.ir/تیم-ما');

        OpenGraph::setTitle('تیم ما در قزوین');
        OpenGraph::setDescription('شما میتوانید سئو سایت و طراحی سایت خود را به تیم ما در قزوین بسپارید.');
        OpenGraph::setUrl('http://vidona.ir/تیم-ما');
        OpenGraph::addProperty('type', 'homepage');
        JsonLd::setTitle('تیم ما در قزوین');
        JsonLd::setDescription('شما میتوانید سئو سایت و طراحی سایت خود را به تیم ما در قزوین بسپارید.');
        JsonLd::setType('HomePage');

    }
    public function render()
    {
        return view('livewire.publics.our-team');
    }
}
