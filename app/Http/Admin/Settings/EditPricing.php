<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Pricing;

class EditPricing extends Component
{
    public  $pricing;
    public $confirmingDelete = false;
    protected $rules = [
        'pricing.name' => 'required',
        'pricing.price' => 'required',
        'pricing.features' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function confirmDelete()
    {
        $this->confirmingDelete = true;
        
    }

    public function save()
    {
        $this->validate();
        $this->pricing->save();
        $this->emit('saved');
    }

    public function delete($id)
    {

        Pricing::find($id)->delete();
        return redirect()->to(url('settings/pricing'));
    }
    
    public function mount(Pricing $pricing)
    {
        $this->pricing = $pricing;
    }

    public function render()
    {
        return view('admin.settings.edit-pricing')->layout('admin.layouts.app');
    }
}
