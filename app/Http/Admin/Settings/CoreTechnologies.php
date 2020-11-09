<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;

class CoreTechnologies extends Component
{
    public function render()
    {
        return view('admin.settings.core-technologies')->layout('admin.layouts.app');
    }
}
