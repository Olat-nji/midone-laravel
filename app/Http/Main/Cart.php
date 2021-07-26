<?php

namespace App\Http\Main;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Cart extends Component
{

    public $quantity;
    public $comments;


    public function destroy($id)
    {

        ModelsCart::find($id)->delete();
    }


    public function updatedComments()
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }

        if (ModelsCart::where('user_id', $user_id)->where('product_id', 26)->get()->count() > 0) {
            if ($this->comments != 0) {
                $cart = ModelsCart::where('user_id', $user_id)->where('product_id', 26)->get();
                foreach ($cart as $key => $value) {
                    $value->quantity = $this->comments;
                    $value->save();
                }
            }
        }
    }
    public function mount()
    {
        if (auth()->check()) {
            $cart = ModelsCart::where('user_id', auth()->user()->id)->get();
        } else {
            $cart = ModelsCart::where('user_id', session('cart'))->get();
        }
        foreach ($cart as $carts) {
            $this->quantity . $carts->id = 1;
        }




        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }
        if (ModelsCart::where('user_id', $user_id)->where('product_id', 26)->get()->count() > 0) {
            $cart = ModelsCart::where('user_id', $user_id)->where('product_id', 26)->get()->first();
            $this->comments = ($cart->quantity != null) ? $cart->quantity : 1;
        }
    }


    

    public function render()
    {


        if (auth()->check()) {
            $cart = ModelsCart::where('user_id', auth()->user()->id)->get();
        } else {
            $cart = ModelsCart::where('user_id', session('cart'))->get();
        }


        return view(
            'main.cart',
            [
                'cart' => $cart
            ]
        )->layout('layouts.app2');
    }
}
