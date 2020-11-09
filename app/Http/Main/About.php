<?php

namespace App\Http\Main;

use App\Models\About as ModelsAbout;
use App\Models\Testimonial;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('main.about',[
            'about'=>ModelsAbout::where('name','About (About Page)')->get()->first()->value,
            'testimonials'=>Testimonial::all(),
        ])->layout('layouts.app2');
    }
}
