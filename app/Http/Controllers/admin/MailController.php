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
        $emails = [];

        if($request->has('emails') !== null){
            $emails = explode(';',$request['emails']);

        }

        $subject = $request['subject'];

        $mail = Mail::create([
            'subject'=>$subject,
            'description'=>$request['description']
        ]);

        if($request->has('user_type')){
            $userEmails = User::where('user_type',$request['user_type'])->select('email')->get()->toArray();
            $emails = array_merge($emails,Arr::flatten($userEmails));
        }

        foreach ($emails as $key=>$value){

            $email = $emails[$key];

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

    public function destroy(Request $request)
    {

        $mailAddresses = MailAddress::whereIn('id',$request['mail'])->get();

        $mailAddresses->each(function ($mailAddress) use($mailAddresses){
            $mailAddress->delete();

            if($mailAddresses->count() <= 1){
                $mailAddress->mail()->delete();
            }
        });

        return redirect()->back()->with('success','Email deleted has been successfully');
    }

    public function show(MailAddress $mailAddress)
    {

        return view('admin.modules.mails.show',compact('mailAddress'));
    }

    public function sendMail()
    {
        $mailAddresses = MailAddress::with('mail')->where('status',1)->get();

        return view('admin.modules.mails.send-mail',compact('mailAddresses'));
    }

    public function draftMail()
    {
        $mails = Mail::with('mailAddresses')->get();

        return view('admin.modules.mails.draft-mail',compact('mails'));
    }

    public function draftEdit(Mail $mail)
    {
        return view('admin.modules.mails.draft-mail-edit',compact('mail'));
    }

    public function trashIndex()
    {
        $trashMails = MailAddress::onlyTrashed()->with('mail')->get();

        return view('admin.modules.mails.trash-mail',compact('trashMails'));
    }

    public function trashDestroy(Request $request)
    {

        $mailAddresses = MailAddress::whereIn('id',$request['mail'])->onlyTrashed()->get();

        $mailAddresses->each(function ($mailAddress) use($mailAddresses){
            $mailAddress->forceDelete();

            if($mailAddresses->count() <= 1){
                $mailAddress->mail()->forceDelete();
            }
        });

        return redirect()->back()->with('success','Emails permanently deleted successfully');
    }
}
