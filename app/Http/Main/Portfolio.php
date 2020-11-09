<?php

namespace App\Http\Main;

use Livewire\Component;
use Livewire\WithPagination;

class Portfolio extends Component
{
    use WithPagination;
    public function render()
    {
        return view('main.portfolio',
    [
        'portfolios'=>\App\Models\Portfolio::paginate(10),
    ])->layout('layouts.app2');
    }
}
