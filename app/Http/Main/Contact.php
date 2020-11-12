<?php

namespace App\Http\Main;

use App\Models\Contact as ModelsContact;
use App\Models\Notification;
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
        // Notification::new([
        //     'name' => 'New Project',
        //     'message' => auth()->user()->name.' Is Intrested in one of our services',
        //     'type' => null,
        //     'user_id' => null,
        //     'team_id' => 1,
        //     'from' => auth()->user()->id,
        //     'link'=>url('projects/' . $project->id),
        //     'seen'=>'false',
        //     'project'=>$project, 
        //     'user'=>auth()->user(),
        //     'to'=>Team::find(1)->users
        //     ]);
        $this->emit('saved');
    }

    public function render()
    {
        return view('main.contact')->layout('layouts.app2');
    }
}
