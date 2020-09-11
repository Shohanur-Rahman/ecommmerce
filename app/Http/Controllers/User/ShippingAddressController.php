<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\ShippingAddress;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function create()
    {
        return view('user.pages.shippings.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return redirect(route('dashboard.index'))->with('message','New Shipping Address is Created Successfully');
    }

    public function edit(ShippingAddress $shippingAddress)
    {
        return view('user.pages.shippings.edit',compact('shippingAddress'));
    }

    public function update()
    {
        return redirect(route('dashboard.index'))->with('message','Shipping Address is Updated Successfully');
    }
}
