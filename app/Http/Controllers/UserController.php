<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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

         $user->userProfile()->create();

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

        $remember_me = $request['remember'] ? true : false;
        $attempts = ['email' => $request['email'], 'password' => $request['password'],'is_active'=>1];

        if(Auth::attempt($attempts,$remember_me)) {

            return redirect(route('profiles.index'));
        }

        return redirect()->back()->with('error-message','Email or Password is Wrong');
    }

    public function forgetPasswordIndex()
    {
        return view('user.pages.accounts.forget-password');
    }

    public function forgetPasswordStore(Request $request)
    {
        $email = $request['email'];
        $code = ['code'=>Str::random(5),'email'=>$email];

        Session::put('password-recovery-code',$code);

        Mail::send('emails.forget-password', $code, function($message) use($email){
            $message->to($email)->subject('Recover Password via the code');
        });

        return redirect(route('password.recovery.index'));
    }

    public function passwordRecovery(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|min:5|max:5'
        ]);

        $code =  Session::get('password-recovery-code');
        if( $code == null)
            return redirect(route('login'));

        if($code['code'] === $request['code']){
            return redirect(route('password.update'));
        }

        return redirect()->back()->with('error-message','Recovery Code is Wrong');

    }

    public function passwordRecoveryIndex()
    {

        return view('user.pages.accounts.recover-password-code');
    }

    public function passwordUpdateGet()
    {
        return view('user.pages.accounts.password-update');
    }

    public function passwordUpdateStore(Request $request)
    {
        $this->validate( $request,[
            'password' => ['required', 'string', 'min:8','required_with:confirm-password','same:confirm-password'],
        ]);

        $code =  Session::get('password-recovery-code');

        if(Session::has('password-recovery-code')){
            $user = User::where('email',$code['email'])->first();

            $user->update(['password'=>Hash::make($request['password']),]);

            return view('user.welcome');
        }

        return redirect(route('login'));
    }
}
