<?php

namespace App\Http\Admin\Projects;

use App\Models\Project;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public $q;
    public $user;
    protected $queryString = ['q','user'];
    public $pages=10;
    public $confirmingDelete = false;

    public function updatingQ()
    {
        $this->resetPage();
    }

    public function updatingUser()
    {
        $this->resetPage();
    }
    
    public function render()
    {

        $projects=Project::orWhere('user_id', $this->user)->get();
        $teams=User::find($this->user)->allTeams();
        foreach($teams as $team){
            $projects=$projects->merge(Project::orWhere('team_id',$team->id)->get());
        }
        
        $projects = $this->paginate($projects,$this->pages);
        return view('admin.projects.index',[
            'projects'=>$projects,
        ])->layout('admin.layouts.app');
    }

    public function paginate($items, $perPage = 15, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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
