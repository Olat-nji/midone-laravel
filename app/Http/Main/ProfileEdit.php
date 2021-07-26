<?php

namespace App\Http\Main;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $user;
    public $password;
    public $current_password;
    public $password_confirmation;


    public $rules = [
        'user.name' => 'required',
        'user.email' => 'required',
        'user.phone' => 'required',
        'user.instagram_id' => 'required',
        'password' => 'confirmed'
    ];


    public function mount()
    {
        $this->user = User::find(auth()->user()->id);
    }
    public function save()
    {
        $this->validate();
        $this->user->save();
        if ($this->password != null) {
            if ($this->user->password == Hash::make($this->current_password)) {

                $this->user->password = Hash::make($this->password);
                $this->user->save();
            } else {
                $this->password = '';
                $this->password_confirmation = '';
                $this->current_password = '';
                return   $this->emit('notmatch');
            }
        }
        return $this->emit('saved');
    }
    public function render()
    {

        return view('main.profile-edit')->layout('layouts.app2');
    }
}
