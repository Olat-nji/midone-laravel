<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Testimonial as ModelTestimonial;
class Testimonials extends Component
{

    public $name;
    public $job;
    public $testimonial;
   
    public $theid;
    public $confirmingDelete = false;
    protected $rules = [
        'name' => 'required',
        'testimonial' => 'required',
        
    ];

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->theid = $id;
    }

   
   
    public function delete()
    {
        $id=$this->theid;
        ModelTestimonial::find($id)->delete();
        $this->confirmingDelete = false;
    }

    public function new()
    {
        
        
        
        ModelTestimonial::create([
            'name' => $this->name,
            'job' => $this->job,
            'testimonial'=>$this->testimonial
        ]);
        return redirect()->to(url('settings/testimonials'));
    }


    public function render()
    {
        return view('admin.settings.testimonials',[
            'testimonials' => ModelTestimonial::all()
        ])->layout('admin.layouts.app');
    }
}
