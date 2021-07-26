<?php

namespace App\Http\Main;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Livewire\Component;

class Profile extends Component
{
    public $quantity;
    public $comments;


    public function destroy($id)
    {

        Cart::find($id)->delete();
    }


    public function updatedComments()
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }

        if (Cart::where('user_id', $user_id)->where('product_id', 26)->get()->count() > 0) {
            if ($this->comments != 0) {
                $cart = Cart::where('user_id', $user_id)->where('product_id', 26)->get();
                foreach ($cart as $key => $value) {
                    $value->quantity = $this->comments;
                    $value->save();
                }
            }
        }
    }
    public function render()
    {


        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $orders = Order::where('user_id', auth()->user()->id)->get();
        $ords = [];
        foreach ($orders as $key => $value) {
            $ords[] = $value->order_id;
            # code...

        }

        $ords = array_unique($ords);
        $ordets = [];
        foreach ($ords as $key => $value) {
            $order = OrderDetails::find($value);
            if ($order->answered) {
                $ordets[] = $value;
            }
        }

        return view('main.profile', [
            'cart' => $cart,
            'orders' => count($ords),
            'ordersdone' => count($ordets),
        ])->layout('layouts.app2');
    }
}
