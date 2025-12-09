<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function pay()
    {
        $key = config('services.razorpay.key');
        $secret = config('services.razorpay.secret');

        // ✅ 100% confirm keys loaded or not
        if (!$key || !$secret) {
            dd("Razorpay keys missing from config!");
        }

        $api = new Api($key, $secret);

        $order = $api->order->create([
            'receipt'  => uniqid(),
            'amount'   => 50000, // ₹500
            'currency' => 'INR'
        ]);

        return view('pay', ['orderId' => $order['id']]);
    }

    public function success(Request $request)
    {
        return "✅ Payment Successful";
    }
}
