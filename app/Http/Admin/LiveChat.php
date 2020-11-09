<?php

namespace App\Http\Admin;

use Livewire\Component;

class LiveChat extends Component
{
    public function render()
    {
        return view('admin.live-chat')->layout('admin.layouts.app');
    }
}
