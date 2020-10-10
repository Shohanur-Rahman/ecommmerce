<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MailController extends Controller
{
    public function index(){

        return view('admin.modules.mails.index');
    }

    public function create()
    {
        $userTypes = User::select('user_type')->whereNotIn('user_type',['admin','super-admin'])->distinct()->get();
        return view('admin.modules.mails.create',compact('userTypes'));
    }

    public function store(Request $request)
    {

        $subject = $request['subject'];

        $mail = Mail::create([
            'subject'=>$subject,
            'description'=>$request['description']
        ]);

        if($request->has('user_type')){
            $users = User::where('user_type',$request['user_type'])->get()->toArray();
        }else{
            $users = $request['emails'];
        }

        foreach ($users as $key=>$value){

            $email = $users[$key];
            $mail->mailAddresses()->create(['email'=>$email]);

            \Illuminate\Support\Facades\Mail::send('admin.modules.mails.emails.email',['data'=>$email],function ($message) use($email,$subject){
                $message->to($email)->subject($subject);
            });
        }

        return redirect()->back()->with('success','Email sent has been successfully');
    }

    public function sendMail()
    {
        $mails = Mail::with('mailAddresses')->get();

        return view('admin.modules.mails.send-mail',compact('mails'));
    }
}
