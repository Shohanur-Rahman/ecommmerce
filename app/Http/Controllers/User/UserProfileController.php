<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user..pages.profiles.index');
    }

    public function edit(User $user)
    {
        return view('user..pages.profiles.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {

        return redirect(route('user..pages.profiles.index'))->with('success','Profile Updated Successfully');
    }

    public function changePasswordEdit (User $user)
    {
        return view('user..pages.profiles.change-password',compact('user'));
    }

    public function changePasswordUpdate(Request $request, User $user)
    {
        dd($user->all());
    }
}
