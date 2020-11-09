<?php

namespace App\Http\Main;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $email;
    public $message;
    public $subject;
    public $phone;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'min:4',
        'message' => 'required|min:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        ModelsContact::create([
            'name' => $this->name,
            'email' =>$this->email,
            'phone' => $this->phone,
            'subject' =>$this->subject,
            'message' => $this->message
        ]);
        $this->emit('saved');
    }

    public function render()
    {
        return view('main.contact')->layout('layouts.app2');
    }
}
