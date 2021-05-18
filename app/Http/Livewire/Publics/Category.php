<?php

namespace App\Http\Livewire\Publics;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public ModelsCategory $category;

    public function render()
    {
        $articles=$this->category->articles()->paginate(5);
        return view('livewire.publics.category',compact(['articles']));
    }
}
