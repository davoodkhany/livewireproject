<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{

    public function render()
    {
        $categorys=ModelsCategory::get();

        return view('livewire.publics.layouts.component.category',compact('categorys'));
    }
}
