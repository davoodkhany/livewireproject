<?php

namespace App\Http\Livewire\Publics;

use App\Models\Article;
use Livewire\Component;

use OpenGraph;
use JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

class Single extends Component
{
    public Article $article;


    public function mount()
    {

        SEOMeta::setTitle($this->article->seotitle);
        SEOMeta::setDescription($this->article->seo_discription);
        SEOMeta::setCanonical($this->article->path());

        OpenGraph::setDescription($this->article->seo_discription);
        OpenGraph::setTitle($this->article->seo_title);
        OpenGraph::setUrl($this->article->path());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'fa_IR');
        OpenGraph::addImage($this->article->image, ['height' => 300, 'width' => 300]);

        JsonLd::setTitle($this->article->seo_title);
        JsonLd::setDescription($this->article->seo_discription);
        JsonLd::setType('Article');
        JsonLd::addImage($article->image);

    }
    public function render()
    {
        return view('livewire.publics.single');
    }
}
