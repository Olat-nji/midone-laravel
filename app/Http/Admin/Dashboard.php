<?php

namespace App\Http\Admin;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{

    use WithPagination;

    public $projectPages = 10;
    public $usersCount;
    public $adminUsersCount;

    public function mount()
    {
        $this->adminUsersCount = count(Team::where('id', 2)->get()->first()->allUsers());
        $this->adminUsersCount += count(Team::where('id', 1)->get()->first()->allUsers());
        $this->usersCount = (User::all()->count()) - $this->adminUsersCount;
    }

    public function delete($id)
    {
        $project = Project::find($id)->delete();
        $this->emit('deleted');
    }


    public function render()
    {
        if (Auth::user()->CurrentTeam->id == 1) {
            $projects = Project::orderBy('id', 'desc')->paginate($this->projectPages);
            $allProjects = Project::orderBy('id', 'desc');
        } else {
            $projects = Project::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate($this->projectPages);
            $allProjects = Project::where('user_id', Auth::user()->id);
        }


        return view(
            'admin.dashboard',
            [
                'allProjects' => $allProjects,
                'projects' => $projects,
                'messages' => Contact::where('status', null)->get(),
                'users' => User::orderBy('id', 'desc')->get()->take(6)
            ]
        )->layout('admin.layouts.app');
    }
}
