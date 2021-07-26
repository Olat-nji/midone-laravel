<?php

namespace App\Http\Main;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Checkout extends Component
{
    public $comments;
    public $log_email;
    public $log_password;
    public $log_remember;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $instagram_id;
    public $total;

    public $rules = [

        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'phone' => 'required',
        'instagram_id' => 'required',
    ];


    public function mount()
    {


        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }
        if (Cart::where('user_id', $user_id)->where('product_id', 26)->get()->count() > 0) {
            $cart = Cart::where('user_id', $user_id)->where('product_id', 26)->get()->first();
            $this->comments = ($cart->quantity != null) ? $cart->quantity : 1;
        }
    }


    public function login()
    {
        $credentials = [
            'email' => $this->log_email,
            'password' => $this->log_password,


        ];
        if (Auth::attempt($credentials, $this->log_remember)) {
            $cart = ModelsCart::where('user_id', auth()->user()->id)->get();
            $cart_i = session('cart');
            $car = Cart::where('user_id', $cart_i)->get();
            foreach ($car as $key => $value) {
                if (Cart::where('user_id', auth()->user()->id)->where('product_id', $value->product_id)->get()->count() > 0) {
                } else {
                    $value->user_id = auth()->user()->id;
                    $value->save();
                }
            }


            $this->emit('logged_in', auth()->user()->name);
        }
    }





    public function register()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->phone = $this->phone;
        $user->instagram_id = $this->instagram_id;
        $user->save();

        Auth::login($user);
        $cart_i = session('cart');
        $car = Cart::where('user_id', $cart_i)->get();
        foreach ($car as $key => $value) {
            if (Cart::where('user_id', auth()->user()->id)->where('product_id', $value->product_id)->get()->count() > 0) {
            } else {
                $value->user_id = auth()->user()->id;
                $value->save();
            }
        }
        $team = Team::find(2);
        $team->users()->attach(
            $newTeamMember = $user,
            ['role' => 'Editor']
        );
        $user->current_team_id=$team->id;
        $user->save();


        $this->emit('logged_in', auth()->user()->name);
    }





    public function checkout()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $orders = new OrderDetails();
        $orders->total = $this->total;
        $orders->save();

        foreach ($cart as $key => $value) {
            $order = new Order();
            $order->product_id = $value->product_id;
            $order->user_id = auth()->user()->id;
            $order->quantity = $value->quantity;
            $order->order_id = $orders->id;
            $order->save();
            $value->delete();
        }
    }








    public function render()
    {



        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }
        $cart = Cart::where('user_id', $user_id)->get();




        return view(
            'main.checkout',
            [
                'cart' => $cart
            ]
        )->layout('layouts.app2');
    }
}
