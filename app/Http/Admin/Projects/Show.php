<?php

namespace App\Http\Admin\Projects;

use App\Models\Project;
use App\Models\Comment;
use Livewire\Component;

class Show extends Component
{

    public $project;
    public $comment;
    public $confirmingDelete = false;
    protected $rules = [
        'comment' => 'required'

    ];

    public  function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view(
            'admin.projects.show',
            [
                'comments' => Comment::where('project_id',$this->project->id)->orderBy('id','desc')->get()
            ]
        )->layout('admin.layouts.app');
    }

    //Delete
    public function confirmDelete()
    {
        $this->confirmingDelete = true;
    }

    public function delete($id)
    {

        Project::find($id)->delete();
        return redirect()->to(url('projects'));
    }

    public function refresh()
    {
        $this->reset('search');
    }

    //Comment
    public function newComment()
    {
        $this->validate();
        Comment::create([
            'comment' => $this->comment,
            'user_id' => auth()->user()->id,
            'project_id' => $this->project->id
        ]);
        
        $this->reset('comment');
    }
}
