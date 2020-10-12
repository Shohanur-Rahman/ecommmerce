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


    public function faq()
    {

        return view('user.pages.links.faq');

    }

    public function privacyPolicy()
    {

        return view('user.pages.links.privacy');

    }
    public function termsConditions()
    {

        return view('user.pages.links.terms');

    }
}
