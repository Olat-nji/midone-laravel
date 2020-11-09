<?php

namespace App\Http\Admin\Settings;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{

    public $name;
    public $value;
    
    public $theid;
    public $confirmingDelete = false;
    protected $rules = [
        'name' => 'required',
        'value' => 'required',
        
    ];

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->theid = $id;
    }

    
   
    public function delete()
    {
        $id=$this->theid;
        ModelsFaq::find($id)->delete();
        $this->confirmingDelete = false;
    }

    public function new()
    {
        
        
        $this->validate();
        
        ModelsFaq::create([
            'name' => $this->name,
            'value' => $this->value,
            
        ]);
        return redirect()->to(url('settings/faqs'));
    }


    public function render()
    {
        return view('admin.settings.faq',[
            'faqs'=>ModelsFaq::all()
        ])->layout('admin.layouts.app');
    }
}
