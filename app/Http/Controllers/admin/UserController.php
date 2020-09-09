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

    public function edit()
    {
        return view('admin.modules.users.edit');
    }
}
