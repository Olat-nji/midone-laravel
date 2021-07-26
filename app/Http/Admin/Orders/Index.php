<?php

namespace App\Http\Admin\Orders;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $q;
    public $user;
    protected $queryString = ['q', 'user'];
    public $pages = 10;
    public $confirmingDelete = false;





    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }



    public function answer($id)
    {
        $order=OrderDetails::find($id);
        $order->answered=true;
        $order->save();
    }

    public function unanswer($id)
    {
        $order=OrderDetails::find($id);
        $order->answered=false;
        $order->save();
    }

    public function render()
    {


        if ($this->user != null) {
            $orders = Order::orderBy('id', 'desc');
            $orders = $orders->where('user_id', $this->user);
        } else {

            if ($this->q != null) {
                $orders = Order::where('id', 0);
                $users = User::orWhere('name', 'LIKE', '%' . $this->q . '%')->orWhere('email', 'LIKE', '%' . $this->q . '%')->orWhere('instagram_id', 'LIKE', '%' . $this->q . '%')->get();

                foreach ($users as $key => $value) {

                    $orders = Order::orWhere('user_id', $value->id);
                }
            } else {
                $orders = Order::orderBy('id', 'desc');
            }
        }
        $orders = $orders->get()->groupBy('order_id');

        $orders = $this->paginate($orders, $this->pages);
        return view('admin.orders.index', [
            'orders'    => $orders
        ])->layout('admin.layouts.app');
    }
}
