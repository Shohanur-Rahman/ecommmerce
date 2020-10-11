<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\MailAddress;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use function Sodium\crypto_box_publickey_from_secretkey;

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
        $userType = $request['user_type'];

        $mail = Mail::create([
            'subject'=>$subject,
            'description'=>$request['description'],
            'user_type'=>$userType
        ]);

        if($request->has('user_type')){
            $userEmails = User::where('user_type',$userType)->select('email')->get()->toArray();
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

        $mailAddresses->each(function ($mailAddress,$key) use($mailAddresses){
            $mailAddress->delete();

            $mailTotalCount = MailAddress::where('mail_id',$mailAddress->mail->id)->count();

            if($mailTotalCount == 0){
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

        $mails = Mail::whereHas('mailAddresses', function($q){
            $q->where('status', 0);
        })->get();

        return view('admin.modules.mails.draft-mail',compact('mails'));
    }

    public function draftEdit(Mail $mail)
    {
        $userTypes = User::select('user_type')->whereNotIn('user_type',['admin','super-admin'])->distinct()->get();

        return view('admin.modules.mails.draft-mail-edit',compact('mail','userTypes'));
    }

    public function draftDestroy(Request $request)
    {
        $mails = Mail::whereIn('id',$request['mail'])->with('mailAddresses')->get();

        $mails->each(function ($mail) use($mails){
            $mail->delete();

            $mail->mailAddresses()->delete();
        });

        return redirect()->back()->with('success','Draft Email has been deleted successfully');
    }


    public function draftupdate(Request $request)
    {
        dd($request->all());
    }

    public function trashIndex()
    {
        $trashMails = MailAddress::onlyTrashed()->where('status',1)->with('mail')->get();

        return view('admin.modules.mails.trash-mail',compact('trashMails'));
    }

    public function trashDestroy(Request $request)
    {

        $mailAddresses = MailAddress::whereIn('id',$request['mail'])->with('mail')->onlyTrashed()->get();

        $mailAddresses->each(function ($mailAddress,$key) use($mailAddresses){
            $mailAddress->forceDelete();

            $mailTotalCount = MailAddress::where('mail_id',$mailAddress->mail->id)->onlyTrashed()->count();

            if($mailTotalCount == 0){
                $mailAddress->mail()->forceDelete();
            }
        });

        return redirect()->back()->with('success','Emails permanently deleted successfully');
    }
}
