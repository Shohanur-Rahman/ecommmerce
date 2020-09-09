<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($type)
    {
        $users = User::where('user_type',$type)->get();

        return view('admin.modules.users.index',compact('users'));
    }

    public function edit($type, User $user)
    {
        $types = User::distinct()->get(['user_type']); ;

        return view('admin.modules.users.edit',compact('user','types'));
    }

    public function update($type, User $user,Request $request)
    {

        $user->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'user_type'=>$request['user_type'],
            'is_active'=>$request['is_active'] ?? 0,
            'admin_comment'=>$request['admin_comment'],
        ]);

        return redirect(route('users.index',$type))->with('success','User Information Updated Successfully');
    }
}
