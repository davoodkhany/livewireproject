<?php

namespace App\Http\Livewire\Publics\Layouts\Component;

use App\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{

    public $name;
    public $email;
    public $comment;
    protected $rules=[
        'name'=>'required',
        'email'=>'required',
        'comment'=>'required'

    ];

    public function comment(){
        $this->validate();

      ModelsComment::create([
        'name'=>$this->name,
        'email'=>$this->email,
        'comment'=>$this->comment
      ]);

      $this->emit('comment');
    }

    public function render()
    {
        return view('livewire.publics.layouts.component.comment');
    }
}
