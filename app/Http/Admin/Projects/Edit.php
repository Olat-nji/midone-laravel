<?php

namespace App\Http\Admin\Projects;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $step = 1;

    public $name;
    public $purpose;
    public $ecommerce;
    public $vendors;
    public $no_of_products;
    public $description;
    public $budget;
    public $status;
    public $similar;
    public $similar_websites;
    public $urgency;
    public $email;
    public $phone;
    public $website_url;
    public $extent_of_redesign ;
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'budget' => 'required|integer'

    ];
    public Project $project;

    public function mount()
    {
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->name = $this->project->name;
        $this->purpose = $this->project->purpose;
        $this->ecommerce = $this->project->ecommerce;
        $this->vendors = $this->project->vendors;
        $this->no_of_products = $this->project->no_of_products;
        $this->description = $this->project->description;
        $this->budget = $this->project->budget;
        $this->similar = $this->project->similar;
        $this->status = $this->project->status;
        $this->similar_websites = $this->project->similar_websites;
        $this->urgency = $this->project->urgency;
        $this->website_url = $this->project->website_url;
        $this->extent_of_redesign = $this->project->extent_of_redesign;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        $project = Project::find($this->project->id);
        $project->fill([
            'name' => $this->name,
            'team_id' => auth()->user()->CurrentTeam->id,
            'user_id' => auth()->user()->id,
            'budget' => $this->budget,
            'status' => $this->status,
            'purpose' => $this->purpose,
            'progress' => 0,
            'description' => $this->description,
            'urgency' => $this->urgency
        ]);
        $user = User::find(auth()->user()->id);
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->save();

        if ($this->purpose == 'Launch a New Website') {
            if ($this->ecommerce != 'No') {
                $project->no_of_products = $this->no_of_products;
                $project->vendors = $this->vendors;
                $project->ecommerce = $this->ecommerce;
               
            }else{
                $project->no_of_products = '';
                $project->vendors = '';
            }
            if ($this->similar != 'No') {
                $project->similar = $this->similar;
                $project->similar_websites = $this->similar_websites;
                
            }else{
                $project->similar_websites = '';
            }
            $project->website_url = '';
            $project->extent_of_redesign = '';
        } else {
            $project->website_url = $this->website_url;
            $project->extent_of_redesign = $this->extent_of_redesign;
            $project->no_of_products = '';
            $project->vendors = '';
            $project->similar_websites = '';
        }
        $project->save();
        return redirect()->to(url('projects/' . $project->id));
    }

    public function render()
    {
        return view('admin.projects.edit')->layout('admin.layouts.app');
    }

    public function AddStep()
    {
        $this->validateStep();
        $this->step = $this->step + 1;
    }
}
