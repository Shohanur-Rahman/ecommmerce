<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\ShippingAddress;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        $shippingAddresses = ShippingAddress::all();
        $user = Auth::user();

        return view('user.pages.profiles.index',compact('shippingAddresses','user'));
    }

    public function edit(User $user)
    {
        return view('user.pages.profiles.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {

        return redirect(route('profiles.index'))->with('success','Profile Updated Successfully');
    }

    public function changePasswordEdit (User $user)
    {
        return view('user.pages.profiles.change-password',compact('user'));
    }

    public function changePasswordUpdate(Request $request, User $user)
    {
        dd($user->all());
    }
}
