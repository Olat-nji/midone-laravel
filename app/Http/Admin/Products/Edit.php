<?php

namespace App\Http\Admin\Products;

use App\Models\Products;
use Livewire\Component;

class Edit extends Component
{
    public $product;
    public $confirmingDelete = false;
    public function confirmDelete()
    {
        $this->confirmingDelete = true;
    }

    protected $rules = [
        'product.name' => 'required',
        'product.type' => 'required',
        'product.price' => 'required',
    ];


    public function mount(Products $product)
    {
        $this->product = $product;
    }
    public function save()
    {
        $this->product->save();
        $this->emit('saved');
    }


    public function delete($id)
    {
        
        Products::find($id)->delete();
        return redirect()->to(url('products'));
    }


    public function render()
    {
        return view('admin.products.edit')->layout('admin.layouts.app');
    }
}
