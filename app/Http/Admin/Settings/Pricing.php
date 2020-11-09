<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Pricing as ModelPricing;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Component
{

    public $name;
    public $price;
    public $features;
    public $theid;
    public $confirmingDelete = false;
    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'features' => 'required',
    ];

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->theid = $id;
    }

   
   
    public function delete()
    {
        $id=$this->theid;
        ModelPricing::find($id)->delete();
        $this->confirmingDelete = false;
    }

    public function new()
    {
        $this->validate();

        ModelPricing::create([
            'name' => $this->name,
            'price' => $this->price,
            'features' => $this->features,
        ]);
        return redirect()->to(url('settings/pricing'));
    }

    public function render()
    {
        return view('admin.settings.pricing', [
            'pricings' => ModelPricing::all()
        ])->layout('admin.layouts.app');
    }
}
