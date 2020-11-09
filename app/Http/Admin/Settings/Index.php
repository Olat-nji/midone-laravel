<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.settings.index')->layout('admin.layouts.app');
    }
}
