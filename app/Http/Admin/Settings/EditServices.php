<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;
class EditServices extends Component
{
    use WithFileUploads;
    public  $service;
    public $image;
    public $confirmingDelete = false;
    protected $rules = [
        'service.name' => 'required',
        'service.description' => 'required',
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updatedImage($propertyName)
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function confirmDelete()
    {
        $this->confirmingDelete = true;
        
    }

    public function save()
    {
        if ($this->image != '') {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
        
        $image = asset('public/storage/'.str_replace('public/','',$this->image->store('public/services')));
        $this->service->image = $image;
        }
        $this->validate();
        $this->service->save();
        $this->emit('saved');
        
    }

    public function delete($id)
    {

        Service::find($id)->delete();
        return redirect()->to(url('settings/services'));
    }
    
    public function mount(Service $service)
    {
        $this->service = $service;
        
    }

    public function render()
    {
        return view('admin.settings.edit-services')->layout('admin.layouts.app');
    }
}
