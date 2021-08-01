<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {


        try {
            return paystack()->getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->with('msg', 'The paystack token has expired. Please refresh the page and try again.');
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = paystack()->getPaymentData();
        // dd($paymentDetails);
        if ($paymentDetails['data']['status'] == 'success') {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            $orders = new OrderDetails();
            $orders->total = $paymentDetails['data']['amount'];
            $orders->payment_id = $paymentDetails['data']['id'];
            $orders->reference = $paymentDetails['data']['reference'];
            $orders->paidAt = $paymentDetails['data']['paidAt'];
            $orders->transaction_date = $paymentDetails['data']['transaction_date'];
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

            return view('main.payment.success');
        }


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
