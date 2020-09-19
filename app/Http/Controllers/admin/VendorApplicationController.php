<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User\ApplyVendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendorApplicationController extends Controller
{
    public function index(){
        $applications = ApplyVendor::with('user.userProfile')->get();

        return view('admin.modules.vendor_applications.index',compact('applications'));
    }

    public function show(ApplyVendor $applyVendor)
    {
        $profile = $applyVendor->with('user.userProfile')->first();

        return view('admin.modules.vendor_applications.show',compact('profile'));
    }

    public function update(Request $request, ApplyVendor $applyVendor){
        $email = $applyVendor->user->email;

        $status = $request->has('approve');

        if($status){
            Mail::send('emails.vendors.accepted-mail',['user'=>$applyVendor->user],function($message) use($email) {
                $message->to($email)->subject('Congrats! Your Application is Accepted');
            });
        }

        if(!$status) {
            Mail::send('emails.vendors.withdraw-mail', ['user' => $applyVendor->user], function ($message) use ($email) {
                $message->to($email)->subject('Sorry to say we are remove you form our seller list');
            });
        }

        $applyVendor->update([
            'is_approve'=>$status
        ]);

        return redirect()->back()->with('success','Application approval has been updated successfully');
    }
}
