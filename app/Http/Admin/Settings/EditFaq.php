<?php

namespace App\Http\Admin\Settings;

use App\Models\Faq;
use Livewire\Component;

class EditFaq extends Component
{

    
    public  $faq;
    
    public $confirmingDelete = false;
    protected $rules = [
        'faq.name' => 'required',
        'faq.value' => 'required',
        
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
        
        $this->faq->save();
        $this->emit('saved');
        
    }

    public function delete($id)
    {

        Faq::find($id)->delete();
        return redirect()->to(url('settings/faqs'));
    }
    
    public function mount(Faq $faq)
    {
        $this->faq = $faq;
        
    }

    public function render()
    {
        return view('admin.settings.edit-faq')->layout('admin.layouts.app');
    }
}
