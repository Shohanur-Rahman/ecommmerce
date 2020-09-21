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
}
