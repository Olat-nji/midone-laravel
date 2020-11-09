<?php

namespace App\Http\Main;

use App\Models\About;
use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Testimonial;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('main.index',[
            'services'=>Service::all(),
            'pricings'=>Pricing::all(),
            'faqs'=>Faq::all(),
            'portfolios'=>Portfolio::all(),
            'testimonials'=>Testimonial::all(),
            'about'=>About::where('name','About (Home Page)')->get()->first()
        ]);
    }
}
