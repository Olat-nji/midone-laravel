<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\Products','product_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function details(){
        return $this->belongsTo('App\Models\OrderDetails','order_id');
    }
}
