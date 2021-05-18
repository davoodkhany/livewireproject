<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Models\Article;
use Livewire\Component;

class RecentArticles extends Component
{


    public function render()
    {
        $articles = Article::inRandomOrder()->get()->take(4);

        return view('livewire.publics.layouts.component.recent-articles',compact('articles'));
    }
}
