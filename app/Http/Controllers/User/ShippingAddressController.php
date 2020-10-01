<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Country;
use App\Models\User\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingAddressController extends Controller
{
    public function index()
    {
        return view('user.pages.shippings.index');
    }

    public function create()
    {

        return view('user.pages.shippings.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:shipping_addresses'],
        ]);

        $user = Auth::user();
        $user->shippingAddresses()->create($this->requestField($request));

        return redirect(route('profiles.index'))->with('success','New Shipping Address is Created Successfully');
    }

    public function edit(ShippingAddress $shippingAddress)
    {

        return view('user.pages.shippings.edit',compact('shippingAddress'));
    }

    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:shipping_addresses,email,'.$shippingAddress->id
        ]);

        $shippingAddress->update($this->requestField($request));

        return redirect(route('profiles.index'))->with('success','Shipping Address is Updated Successfully');
    }

    public function requestField($request)
    {
        return [
            'title'=>$request['title'],
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'house'=>$request['house'],
            'road'=>$request['road'],
            'postcode'=>$request['postcode'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'country'=>$request['country'],
            'describe_address'=>$request['describe_address'],
        ];
    }
}
