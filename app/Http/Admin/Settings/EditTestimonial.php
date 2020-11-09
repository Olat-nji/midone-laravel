<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Testimonial;

class EditTestimonial extends Component
{

    public  $testimonial;

    public $confirmingDelete = false;
    protected $rules = [
        'testimonial.name' => 'required',
        'testimonial.testimonial' => 'required',
        'testimonial.job' => 'min:1',

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
        $this->testimonial->save();
        $this->emit('saved');
    }

    public function delete($id)
    {

        Testimonial::find($id)->delete();
        return redirect()->to(url('settings/testimonials'));
    }

    public function mount(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function render()
    {
        return view('admin.settings.edit-testimonial')->layout('admin.layouts.app');
    }
}
