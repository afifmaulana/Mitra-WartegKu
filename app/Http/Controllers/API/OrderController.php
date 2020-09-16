<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {

        $foods = $request['foods'];

        $order = new Order();
        $order->store_id = $request['store_id'];
        $order->user_id = 1;
        $order->total_price = 0;
        $order->save();

        foreach ($foods as $food) {
            $orderDetail = new OrderDetails();
            $orderDetail->order_id = $order->id;
            $orderDetail->food_id = $food['id'];
            $orderDetail->qty = $food['qty'];
            $orderDetail->price = $food['price'] * $food['qty'];
            $orderDetail->save();
        }

        $order->total_price += $order->orderDetails->sum('price'); //$1 = $1 + 4;
        $order->update();


        return response()->json([
            'message' => 'Berhasil Melakukan Order',
            'status' => true,
            'data' => (object)[]
        ]);
    }
}
