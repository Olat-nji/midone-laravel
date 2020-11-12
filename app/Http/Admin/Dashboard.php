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
    
    public $projectPages=10;
    public $usersCount;
    public $adminUsersCount;

    public function mount(){
        $this->usersCount=User::all()->count();
        $this->adminUsersCount=count(Team::where('id',1)->get()->first()->allUsers());
        
    }

    public function render()
    {
        if(Auth::user()->CurrentTeam->id==1){
        $projects = Project::orderBy('id','desc')->paginate($this->projectPages);
        $allProjects = Project::orderBy('id','desc');
        $unanswered = Project::where('status','Unanswered')->get()->count();
        }else{
        $projects = Project::where('team_id',Auth::user()->CurrentTeam->id)->orderBy('id','desc')->paginate($this->projectPages);
        $allProjects = Project::where('team_id',Auth::user()->CurrentTeam->id);
        $unanswered = Project::where('status','Unanswered')->where('team_id',auth()->user()->CurrentTeam->id)->get()->count();
        }
        
        return view('admin.dashboard',
        [
            'projects'=>$projects,
            'allProjects'=>$allProjects,
            'unanswered'=>$unanswered,
            'messages'=>Contact::where('status',null)->get(),
            'users'=>User::orderBy('id','desc')->get()->take(6)
        ])->layout('admin.layouts.app');
    }
}
