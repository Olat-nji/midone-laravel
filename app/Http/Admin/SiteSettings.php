<?php

namespace App\Http\Admin;

use Livewire\Component;

class SiteSettings extends Component
{
    public function render()
    {
        return view('admin.site-settings')->layout('admin.layouts.app');
    }
}
