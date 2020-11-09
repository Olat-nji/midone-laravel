<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Service as ModelService;

class Services extends Component
{
    use WithFileUploads;


    public $name;
    public $description;
    public $image;

    public $theid;
    public $confirmingDelete = false;
    protected $rules = [
        'name' => 'required',
        'description' => 'required',

    ];

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->theid = $id;
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function delete()
    {
        $id = $this->theid;
        ModelService::find($id)->delete();
        $this->confirmingDelete = false;
    }

    public function new()
    {

        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
        $this->validate();
        $image = asset('public/storage/' . str_replace('public/', '', $this->image->store('public/services')));
        ModelService::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $image
        ]);
        return redirect()->to(url('settings/services'));
    }


    public function render()
    {
        return view('admin.settings.services', [
            'services' => ModelService::all()
        ])->layout('admin.layouts.app');
    }
}
