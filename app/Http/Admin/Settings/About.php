<?php

namespace App\Http\Admin\Settings;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{ 
    
    public $abouts;
    

    protected $rules = [
        'abouts.*.value' => 'required|min:6',
        
    ];

    public function mount()
    {
        $this->abouts = ModelsAbout::all();
    }
    public function save()
    {
        $this->validate();

        foreach ($this->abouts as $about) {
            
            $about->save();
        }
        $this->emit('saved');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('admin.settings.about')->layout('admin.layouts.app');
    }
}
