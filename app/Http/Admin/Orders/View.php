<?php

namespace App\Http\Admin\Orders;

use App\Models\Order;
use App\Models\OrderDetails;
use Livewire\Component;

class View extends Component
{
    public $order;
    public $confirmingDelete = false;
    

    public function mount($order)

    {
        $this->order = OrderDetails::find($order);
    }

    public function answer($id)
    {
        $order = OrderDetails::find($id);
        $order->answered = true;
        $order->save();
        return redirect()->to('/orders/'.$this->order->id);
    }

    public function unanswer($id)
    {
        $order = OrderDetails::find($id);
        $order->answered = false;
        $order->save();
        return redirect()->to('/orders/'.$this->order->id);
    }

    public function confirmDelete()
    {
        $this->confirmingDelete = true;
    }

    public function delete($id)
    {
        $orders = Order::where('order_id', $id)->get();
        foreach ($orders as $key => $value) {

            $value->delete();
        }
        OrderDetails::find($id)->delete();
        return redirect()->to(url('orders'));
    }

    public function render()
    {
        return view('admin.orders.view')->layout('admin.layouts.app');
    }
}
