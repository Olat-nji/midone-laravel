<?php

namespace App\Http\Admin\Projects;

use App\Models\Project;

use App\Actions\Fortify\CreateNewUser;
use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Create extends Component
{


    // use PasswordValidationRules;
    public $step = 1;

    
    public $user;
    public $team;

    public $email;
    public $phone;
    public $name_of_user;
    public $password;
    public $password_confirmation;
    
    public $name;
    public $purpose = 'Launch a New Website';
    public $ecommerce = 'No';
    public $vendors = 'No';
    public $no_of_products = '1-50';
    public $description;
    public $budget;
    public $similar = 'No';
    public $similar_websites;
    public $urgency = 'Immediately';
    public $website_url;
    public $extent_of_redesign = 'Complete Redesign';
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'budget' => 'required|integer',
        'name_of_user' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed'],

    ];

    public function mount()
    {
        if (auth()->check()) {
            $this->user=auth()->user();
            
            $this->email = auth()->user()->email;
            $this->phone = auth()->user()->phone;
        } else {
        }
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('admin.projects.create')->layout('admin.layouts.app');
    }







    public function save()
    {
        if (!auth()->check()) {
            $userData = [
                'name' =>  $this->name_of_user,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => $this->password
            ];
            $user = $this->createUser($userData);
            Auth::attempt(['email' => $this->email, 'password' => $this->password]);
           
        }

        $project = Project::create([
            'name' => $this->name,
            'team_id' => auth()->user()->CurrentTeam->id,
            'user_id' => auth()->user()->id,
            'budget' => $this->budget,
            'status' => 'Unanswered',
            'purpose' => $this->purpose,
            'progress' => 0,
            'description' => $this->description,
            'urgency' => $this->urgency
        ]);


        if ($this->purpose == 'Launch a New Website') {
            if ($this->ecommerce != 'No') {


                $project->no_of_products = $this->no_of_products;
                $project->vendors = $this->vendors;
            }
            $project->ecommerce = $this->ecommerce;
            $project->similar = $this->similar;
            if ($this->similar != 'No') {

                $project->similar_websites = $this->similar_websites;
            }
        } else {
            $project->website_url = $this->website_url;
            $project->extent_of_redesign = $this->extent_of_redesign;
        }
        $project->save();
        return redirect()->to(url('projects/' . $project->id));
    }


    protected function createUser(array $input)
    {

        DB::transaction(function () use ($input) {
            tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }


    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save( Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }
}
