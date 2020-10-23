<?php

namespace App\Http\Includes;

use Livewire\Component;

class TopBar extends Component
{
    protected $listeners = [
        'refresh-top-bar' => '$refresh',
    ];

    public function render()
    {
        return view('includes.top-bar');
    }
}
