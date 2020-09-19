<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderProducts.product','user')->get();

        return view('admin.modules.orders.index',compact('orders'));
    }

    public function show(Order $order)
    {
        $order = $order->with('user','orderProducts','shippingAddress')->first();

        return view('admin.modules.orders.show',compact('order'));
    }
}
