<?php

namespace App\Http\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads;

    public $email;
    public $phone;
    public $address;
    public $opening_hours;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $twitter;
    public $image;
    public $logo;

    public function mount()
    {
        $setting = Setting::find(1);
        $this->email = $setting->email;
        $this->phone = $setting->phone;
        $this->address = $setting->address;
        $this->opening_hours = $setting->opening_hours;
        $this->whatsapp = $setting->whatsapp;
        $this->facebook = $setting->facebook;
        $this->instagram = $setting->instagram;
        $this->twitter = $setting->twitter;
        $this->logo=$setting->logo;
    }
    public function save()
    {
        if($this->image!=null){
        $this->validate([
            'image' => 'image|max:5000', // 1MB Max
        ]);}
        $setting = Setting::find(1);
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->address = $this->address;
        $setting->opening_hours = $this->opening_hours;
        $setting->whatsapp = $this->whatsapp;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->twitter = $this->twitter;
        $setting->logo=str_replace('public/','','storage/'.$this->image->store('public/photos'));
        $setting->save();
        $this->emit('saved');
    }


    public function render()
    {
        return view('admin.settings.index')->layout('admin.layouts.app');
    }
}
