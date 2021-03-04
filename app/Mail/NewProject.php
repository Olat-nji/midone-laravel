<?php

namespace App\Mail;

use App\Models\Project;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewProject extends Mailable
{
    use Queueable, SerializesModels;

    public $project;
    public $to;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Project $project, User $to)
    {
     $this->$project=$project;
     $this->to=$to;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('new-project')->subject('New Project On SkyLevel');
    }
}
