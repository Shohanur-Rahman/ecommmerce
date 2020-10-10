<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\MailAddress;
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
        dd($request->all());

        $subject = $request['subject'];

        $mail = Mail::create([
            'subject'=>$subject,
            'description'=>$request['description']
        ]);

        if($request->has('user_type')){
            $userEmails = User::where('user_type',$request['user_type'])->select('email')->get()->toArray();
            $userEmails = Arr::flatten($userEmails);
        }else{
            $userEmails = $request['emails'];
        }

        foreach ($userEmails as $key=>$value){

            $email = $userEmails[$key];

            if($request->has('submit')){
                $mail->mailAddresses()->create(['email'=>$email,'status'=>1]);
                \Illuminate\Support\Facades\Mail::send('admin.modules.mails.emails.email',['email'=>$email,'data'=>$mail],function ($message) use($email,$subject){
                    $message->to($email)->subject($subject);
                });
            }else{
                $mail->mailAddresses()->create(['email'=>$email]);
            }

        }

        return redirect()->back()->with('success','Email sent has been successfully');
    }

    public function show(MailAddress $mailAddress)
    {

        return view('admin.modules.mails.show',compact('mailAddress'));
    }

    public function sendMail()
    {
        $mailAddresses = MailAddress::with('mail')->get();

        return view('admin.modules.mails.send-mail',compact('mailAddresses'));
    }
}
