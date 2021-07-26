<?php

namespace App\Http\Admin;

use App\Models\Contact;
use App\Models\Order;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{

    use WithPagination;

    public $orderPages = 10;
    public $usersCount;
    public $adminUsersCount;

    public function mount()
    {
        $this->usersCount = User::all()->count();
        $this->adminUsersCount = count(Team::where('id', 1)->get()->first()->allUsers());
    }


    public function render()
    {

        $orders = Order::orderBy('id', 'desc')->where('user_id', auth()->user()->id)->get()->groupBy('order_id');


        return view(
            'admin.dashboard',
            [
                'orders' => $orders,
                'countorders' => count(Order::orderBy('id', 'desc')->where('user_id', auth()->user()->id)->get()),


                'messages' => Contact::where('status', null)->get(),
                'users' => User::orderBy('id', 'desc')->get()->take(6)
            ]
        )->layout('admin.layouts.app');

    }
}
