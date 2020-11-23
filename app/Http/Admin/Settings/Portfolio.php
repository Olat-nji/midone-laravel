<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Portfolio as ModelPortfolio;
class Portfolio extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $link;
   
    public $theid;
    public $confirmingDelete = false;
    protected $rules = [
        'name' => 'required',
        'link' => 'required',
        

        
    ];

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->theid = $id;
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:2028', // 1MB Max
        ]);
    }
   
    public function delete()
    {
        $id=$this->theid;
        ModelPortfolio::find($id)->delete();
        $this->confirmingDelete = false;
    }

    public function new()
    {
        
        $this->validate([
            'image' => 'image|max:2028', // 1MB Max
        ]);
        $this->validate();
        $image = asset('public/storage/'.str_replace('public/','',$this->image->store('public/portfolios')));
        ModelPortfolio::create([
            'name' => $this->name,
            'description' => $this->description,
            'image'=>$image,
            'link'=>$this->link
        ]);
        return redirect()->to(url('settings/portfolios'));
    }


    public function render()
    {
        return view('admin.settings.portfolio',[
            'portfolios' => ModelPortfolio::all()
        ])->layout('admin.layouts.app');
    }
}
