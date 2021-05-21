<?php

namespace App\Http\Livewire\Publics;

use App\Models\Article as ModelsArticle;
use App\Models\Category;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use OpenGraph;
use JsonLd;
use Livewire\WithPagination;

class Article extends Component
{

    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap-4';
    public ModelsArticle $article;
    public   $categorys;

    protected $queryString=["search"=>['except'=>1]];

    public function mount(){

        SEOMeta::setTitle('وبلاگ');
        SEOMeta::setDescription('کلیه مقالات حوزه سئو، لاراول، برنامه نویسی گوگل آنالیتیکس و کلی آموزش دیگر در وبسایت ما قرار میگیرد. ');
        SEOMeta::setCanonical('http://vidona.ir/article');

        OpenGraph::setTitle('وبلاگ ویدونا');
        OpenGraph::setDescription('برای بهینه سازی سایت خود با شرکت ویدونا تماس بگیرید.');
        OpenGraph::setUrl('http://vidona.ir/article');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('وبلاگ ویدونا');
        JsonLd::setDescription('برای بهینه سازی سایت خود با شرکت ویدونا تماس بگیرید.');
        JsonLd::setType('article');

    }
    public function render()
    {
        $articles=ModelsArticle::where('title' , 'LIKE' , "%{$this->search}%")->latest()->paginate(6);

        return view('livewire.publics.article',compact('articles'));
    }
}
