<?php

namespace App\Http\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    

    public $q = '';
    protected $queryString = ['q'];
    public $pages=1;

    public function updatingQ()
    {
        $this->resetPage();
    }
    

    public function render()
    {
        return view('admin.users',[

'users'=>\App\Models\User::where('name', 'like', '%'.$this->q.'%')->paginate($this->pages),

        ])->layout('admin.layouts.app');
    }
}
