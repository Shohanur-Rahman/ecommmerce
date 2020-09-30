<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User\CartItem;
use App\Models\User\Country;
use App\Models\User\Order;
use App\Models\User\OrderProduct;
use App\Models\User\ShippingAddress;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Session::has('user_id')){
            return view('user.pages.checkouts.index');
        }

        return redirect('/');
    }

    public function create()
    {
        $user = User::where('id',auth()->id(0))->with('shippingAddresses', 'userProfile')->first();

        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();

        if( $this->checkCart()->isNotEmpty()){

            return view('user.pages.checkouts.create', compact('user', 'cartItems'));
        }

        return redirect('/');
    }

    public function store(Request $request)
    {

       $userProfileCheck = auth()->user()->userProfile;
       $userProfile = auth()->user()->userProfile();

       $data = [
           'phone' => $request['phone'],
           'country' => $request['country'],
           'state' => $request['state'],
           'house' => $request['house'],
           'road' => $request['road'],
           'city' => $request['city'],
           'postcode' => $request['postcode'],
       ];

       if($userProfileCheck){
           $userProfile->update($data);
       }else{
           $userProfile->create($data);
       }

        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();

        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalPrice = ($totalPrice + ($cartItem->product->new_price * $cartItem->quantity));
        }

        $order = Order::create([
            'customer_id' => auth()->id(),
            'shipping_id' => $request['shipping_id'],
            'payment_method' => $request->has('payment_method'),
            'total_amount' => $totalPrice,
            'status' => 0,
        ]);

        $cartItems->each(function ($item) use ($order) {

            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'quantity' => $item->quantity,
            ]);
        });

        return redirect(Route('checkouts.index'))->with('user_id',auth()->id());
    }

    public function shippingAddressCreate()
    {

        if( $this->checkCart()->isNotEmpty()){

            return view('user.pages.checkouts.create', compact('user', 'cartItems'));
        }

        return redirect('/');
    }

    public function shippingAddressStore(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:shipping_addresses'],
        ]);

        $shipping = ShippingAddress::create([
            'user_id' => auth()->id(),
            'title' => $request['title'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'house' => $request['house'],
            'road' => $request['road'],
            'postcode' => $request['postcode'],
            'state' => $request['state'],
            'city' => $request['city'],
            'country' => $request['country'],
        ]);

        return redirect(route('checkouts.create'))->with('shipping_id', $shipping->id);
    }

    private function checkCart(){

        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        return $cartItems;
    }
}
