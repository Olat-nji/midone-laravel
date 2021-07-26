<?php

namespace App\Http\Admin\Includes;


use App\Models\OrderDetails;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{

    
    
    
    

    public function render()
    {
        
        $orders = OrderDetails::all();

        
        return view(
            'admin.includes.search',
            [
                'searchusers'=>User::all(),
                'searchorders'=>$orders
            ]
        );
    }
}
