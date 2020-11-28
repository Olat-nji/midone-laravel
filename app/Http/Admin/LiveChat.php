<?php

namespace App\Http\Admin;

use App\Models\Team;
use App\Models\User;
use App\Models\Chat;
use App\Models\Chat_Recipient;
use App\Models\Message;
use Illuminate\Support\Facades\Redis;
use Livewire\Component;

class LiveChat extends Component
{

    public $q;

    public $chat_id;
    public $group_id;
    public $chatting;
    protected $queryString = ['q', 'chatting'];
    public $message;

    public function updatingMessage()
    {

        if ($this->message != null) {
            Redis::set('user:' . auth()->user()->id . ':typing', true, 'PX', 60);
        } else {
            Redis::set('user:' . auth()->user()->id . ':typing', false, 'PX', 60);
        }
    }
    public function mount()
    {
        if($this->chatting!=null){
            $this->now_chatting($this->chatting);
        }
    }

    public function render()
    {


        if (is_admin()) {
            $users = User::orWhere('name', 'LIKE', '%' . $this->q . '%')->orWhere('email', 'LIKE', '%' . $this->q . '%')->orWhere('phone', 'LIKE', '%' . $this->q . '%')->get()->except(auth()->user()->id);
        } else {
            $users = Team::find(1)->allUsers();
            $users = $users->merge(Team::find(2)->allUsers());
            $teams = User::find(auth()->user()->id)->allTeams();
            foreach ($teams as $team) {
                $users = $users->merge($team->allUsers());
            }
            $users = $users->unique();
            $users = $users->where('id', '!=', auth()->user()->id);
        }
        // if($this->user!=null)
        // $users = $users->where('name', 'LIKE', '%'.$this->q.'%');

        $curm = Message::where('chat_id', $this->chat_id)->get();

        $recipients = Chat_Recipient::orWhere('user_id', auth()->user()->id)->orWhere('chatting', auth()->user()->id)->get();
        if ($this->chatting != null) {
            $current = User::find($this->chatting);
        } else {
            $current = [];
        }
        if ($this->group_id != null) {
            $current = Chat_Recipient::select('user_id')->where('group_id', $this->chat_id)->get()->first()->user();
        }
        return view(
            'admin.live-chat',
            [
                'users' => $users,
                'recipients' => $recipients,
                'friends' => $users->groupBy('name', function ($name) {
                    return str_split($name)[0];
                }),
                'current' => $current,
                'current_messages' => $curm

            ]
        )->layout('admin.layouts.app');
    }

    public function now_chatting($id)
    {


        $recipients = Chat_Recipient::orWhere('chatting', $id)->orWhere('user_id', auth()->user()->id)->orWhere('user_id', $id)->orWhere('chatting', auth()->user()->id)->where('chat_id', '!=', null)->get();
        $rec = Chat_Recipient::orWhere('chatting', $id)->orWhere('user_id', auth()->user()->id)->orWhere('user_id', $id)->orWhere('chatting', auth()->user()->id)->where('chat_id', '!=', null)->get()->first();
        if (count($recipients) != 0) {
            $recipients = Chat_Recipient::where('user_id', auth()->user()->id)->where('group_id', '!=', null)->get();
            if (count($recipients) != 0) {
                $chat = Chat::create([
                    'seen' => false
                ]);
                $rec = Chat_Recipient::create([
                    'chatting' => $id, 'user_id' => auth()->user()->id, 'chat_id' => $chat->id
                ]);
            }
        } else {
            $chat = Chat::create([
                'seen' => false
            ]);
            $rec = Chat_Recipient::create([
                'chatting' => $id, 'user_id' => auth()->user()->id, 'chat_id' => $chat->id
            ]);
        }
        $this->chat_id = $rec->chat_id;
        $this->chatting = $id;

        $this->render();
    }

    public function send()
    {
        $this->validate(
            ['message' => 'required']
        );

        Message::create([
           'message'=>$this->message, 'chat_id' => $this->chat_id, 'group_id' => $this->group_id, 'sender' => auth()->user()->id
        ]);

        $this->reset('message');
        $this->render();
    }

    public function addEmoji($emoji)
    {
        $this->message .= $emoji;
    }
}
