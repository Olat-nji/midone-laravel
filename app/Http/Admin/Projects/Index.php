<?php

namespace App\Http\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public $q;
    protected $queryString = ['q'];
    public $pages=10;
    public $confirmingDelete = false;

    public function updatingQ()
    {
        $this->resetPage();
    }
    
    public function render()
    {

        return view('admin.projects.index',[
            'projects'=>Project::where('name', 'like', '%'.$this->q.'%')->paginate($this->pages),
        ])->layout('admin.layouts.app');
    }

    public function confirmDelete()
    {
        $this->confirmingDelete = true;
    }

    public function delete($id)
    {

        Project::find($id)->delete();
        
    }
}
