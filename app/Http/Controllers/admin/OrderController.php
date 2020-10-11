<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderProducts.product','user')->get();

        return view('admin.modules.orders.index',compact('orders'));
    }

    public function show(Order $order)
    {
        $order = $order->with('user','orderProducts','shippingAddress')
            ->first();

        $userType = Auth::user()->user_type;


        if(strtolower($userType) == "vendor"){
            $productInfo = DB::table('products')
                ->join('order_products', 'order_products.product_id', '=', 'products.id')
                ->select('products.*', 'order_products.quantity')
                ->where('products.user_id', Auth::id())
                ->where('order_products.order_id', $order->id)
                ->get();

        }else{

            $productInfo = DB::table('products')
                ->join('order_products', 'order_products.product_id', '=', 'products.id')
                ->select('products.*', 'order_products.quantity')
                //->where('products.user_id', Auth::id())
                ->where('order_products.order_id', $order->id)
                ->get();
        }



        //dd($productInfo);

        return view('admin.modules.orders.show',compact('order', 'productInfo'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->update(['status'=>$request['status'] ?? 'New']);

        return redirect(route('orders.show',$order->id))->with('success','Ordered status updated successfully');
    }
}
