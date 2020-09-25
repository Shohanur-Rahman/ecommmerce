<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\CartItem;
use Auth;

class ProductCartController extends Controller
{

    public function index()
    {
    	$myCartList = CartItem::with('product')->where('user_id', Auth::id())->get();

    	return view('user.pages.carts.index', compact('myCartList'));
    }
    public function delete(CartItem $cart)
    {
    	$cart->delete();
    	return redirect()->back();
    }

    public function update(Request $request)
    {
        $carts = CartItem::where('user_id',auth()->id())->get();

        foreach ($carts as $key=>$cart){

            $cart->update([
                'user_id'=>auth()->id(),
                'product_id'=>$request['product_id'][$key],
                'quantity'=>$request['quantity'][$key]
            ]);
        }
        return redirect()->back()->with('success','Cart Item has been updated successfully');
    }
}
