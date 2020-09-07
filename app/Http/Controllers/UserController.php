<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function login()
    {
        return view('user.pages.accounts.login');
    }

    public function register()
    {
        return view('user.pages.accounts.register');
    }

    public function store()
    {
        $data =request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8','required_with:password_confirmation','same:password_confirmation'],
            ]
        );

        Session::put('register-session',$data['email']);

         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

         $email = $data['email'];

         Mail::send('emails.welcome-mail', $user->toArray(), function($message) use($email){
             $message->to($email)->subject('Welcome to Our Site');
         });

        return redirect()->back()->with('success-message','registration successfully complete. Please Check Your Email!!');
    }

    public function show(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|string|max:250',
            'password'=>'required|min:8'
        ]);

        $attempts =['email' => $request['email'], 'password' => $request['password']];

        if(Auth::attempt($attempts)) {
            return view('user.welcome');
        }

        return redirect()->back()->with('error-message','Email or Password is Wrong');
    }
}
