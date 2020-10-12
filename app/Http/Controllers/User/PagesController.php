<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {

        return view('user.pages.links.about');

    }


    public function contact()
    {

        return view('user.pages.links.contact');

    }
}
