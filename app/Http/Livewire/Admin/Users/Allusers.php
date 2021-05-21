<?php

namespace App\Http\Livewire\Admin\Users;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\VarDumper\Cloner\Data;
use Maatwebsite\Excel\Facades\Excel;

class Allusers extends Component
{

    use WithPagination;

    protected $queryString=['search'];

    public $users,$checkbox, $user_id, $emailverify, $name, $email, $password, $email_verified_at, $search ,$data;

    protected $rules =[
        'name'=>'required|min:8|max:80',
        'email' => 'email|unique:users,email',
        'password'=>'required|min:8|max:256',
    ];


    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function AddUser()
    {
        $data = $this->validate();
        $data['password_nohash'] = $this->password;
        $data['password']= Hash::make($this->password);
        $user = User::create($data);

        if($this->email_verified_at)
        {
           $user->markEmailAsVerified();
        }
        // return redirect(route('admin.alluser'));
        $this->emit('Toast',[ 'meesage' => 'کاربر مورد نظر با موفقیت ثبت شد.']);
    }


    public function Delete(User $user)
    {

        $user->delete();

        $this->emit('Toast',[ 'meesage' => 'کاربر مورد نظر با موفقیت حذف شد.']);
    }


    public function export(){

        return Excel::download(new UsersExport,'users.xlsx');
    }


    public function render()
    {
        $this->users=User::where('name','like',"%$this->search%")->get();
        return view('livewire.admin.users.allusers')->layout('layouts.dashboard');

    }

}
