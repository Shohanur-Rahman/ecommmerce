<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('admin.modules.profiles.create');
    }

    public function passwordEdit()
    {
        return view('admin.modules.profiles.password_edit');
    }
}
