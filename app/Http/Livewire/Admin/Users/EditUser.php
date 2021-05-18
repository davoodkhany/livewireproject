<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditUser extends Component
{

    public User $user;

    public $name;
    public $email;
    public $password;
    public $password_nohash;
    public $email_verified_at;



    public function mount(User $user)
    {
        $this->name=$user->name;
        $this->email=$user->email;
        $this->password=$user->password;
        $this->password_nohash= $user->password;
        $this->email_verified_at=$user->email_verified_at;
    }

    protected $rules =[
        'name'=>'required|min:8|max:80',
        'email' => 'email',
        'password_nohash'=>'required|min:8|max:256',
    ];

    public function EditUser(User $user){

        $data=$this->validate();
        $data['password_nohash'] = $this->password_nohash;
        $data['password']= Hash::make($this->password_nohash);


        if($this->email_verified_at)
        {
            $data['email_verified_at'] = $this->user->markEmailAsVerified();
        }

        $this->user->update($data);
        $this->emit('Toast',[ 'meesage' => 'کاربر مورد نظر با موفقیت ویرایش شد.' , 'icon'=>'info']);
        


        // return redirect(route('admin.alluser'));

    }



    public function updated(){
       $this->validate();
    }

    public function render()
    {
        return view('livewire.admin.users.edit-user')->layout('layouts.dashboard');
    }
}
