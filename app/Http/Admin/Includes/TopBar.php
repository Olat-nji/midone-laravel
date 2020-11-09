<?php

namespace App\Http\Admin\Includes;

use Livewire\Component;

class TopBar extends Component
{
    protected $listeners = [
        'refresh-top-bar' => '$refresh',
    ];

    public function render()
    {
        return view('admin.includes.top-bar');
    }
}
