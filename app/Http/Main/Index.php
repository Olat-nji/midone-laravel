<?php

namespace App\Http\Main;

use App\Http\Main\Cart as MainCart;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Products;
use Hamcrest\Type\IsInteger;
use Livewire\Component;

class Index extends Component
{

    public $email;
    public $name;
    public $message;
    public function contact()
    {
        $message = new Contact();
        $message->name = $this->name;
        $message->email = $this->email;
        $message->message = $this->message;
        $message->save();
        $this->emit('contact_saved');
    }


    public function addtocart($id)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = session('cart');
        }
        $cart_user_id = session('cart');
        if (count(Cart::where('user_id', $user_id)->where('product_id', $id)->get())) {
            $this->emit('exists');
        } else {
            
            $cart = new Cart();
            $cart->product_id = $id;
            if (auth()->check()) {
                $cart->user_id = auth()->user()->id;
            } else {
                $cart_user_id = session('cart');

                if ($cart_user_id == null) {

                    $cart_user_id = $this->randNo();
                }

                session(['cart' => $cart_user_id]);





                $cart->user_id = $cart_user_id;
            }
            $cart->save();
            $this->emit('added');
        }
    }

    public function viewcart()
    {
        return redirect()->to('/cart');
    }

    public function randNo()
    {
        $cart_user_id = rand(-100000000, 100000000);
        if ($this->isExists($cart_user_id)) {
            $cart_user_id = $this->randNo();
        }
        return $cart_user_id;
    }

    public function isExists($no)
    {

        if (count(Cart::where('user_id', $no)->get()) > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function render()
    {

        $products = Products::all()->groupBy('type');

        return view('main.index', [

            'prods' => $products,
        ]);
    }
}
