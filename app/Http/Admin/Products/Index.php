<?php

namespace App\Http\Admin\Products;

use App\Models\Products;
use Livewire\Component;

class Index extends Component
{
    public $q;

    protected $queryString = ['q'];

    
    public function render()
    {
        $products = Products::orderBy('id', 'asc');
        if ($this->q != null) {
            $products = $products->orWhere('name', 'LIKE', '%' . $this->q . '%')->orWhere('price', 'LIKE', '%' . $this->q . '%')->orWhere('type', 'LIKE', '%' . $this->q . '%');
        }
        $products = $products->get();

        return view('admin.products.index', [
            'products' => $products
        ])->layout('admin.layouts.app');
    }
}
