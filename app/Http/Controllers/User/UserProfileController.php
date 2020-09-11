<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\ShippingAddress;
use App\Models\User\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index()
    {
        $shippingAddresses = ShippingAddress::all();
        $user = Auth::user();

        return view('user.pages.profiles.index',compact('shippingAddresses','user'));
    }

    public function edit()
    {
        $authId = Auth::id() ;
        $userProfile = UserProfile:: Where('user_id',$authId)->first();

        return view('user.pages.profiles.edit',compact('userProfile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if($user->userProfile != null){
            $this->validate($request,[
                'secondary_email' => 'required|string|email|max:255|unique:user_profiles,secondary_email,'.$user->userProfile->id
            ]);
        }

        if($user->userProfile === null){

            $user->userProfile()->create($this->requestField($request));
        }

        $user->userProfile()->update($this->requestField($request));

        $user->update(['name'=>$request['name']]);

        return redirect(route('profiles.index'))->with('success','Profile Updated Successfully');
    }

    public function changePasswordEdit ()
    {
        return view('user.pages.profiles.change-password');
    }

    public function changePasswordUpdate(Request $request, User $user)
    {
        $user = Auth::user();

        if(Hash::check($request['current_password'],$user->password)){
            $user->update([
               'password'=>Hash::make($request['new_password'])
            ]);

            return redirect(route('profiles.index'))->with('success','Password Updated Successfully');
        }

        return redirect()->back()->with('error-message','Current Password is Typing Wrong');
    }

    public function requestField($request)
    {
        return [
            'secondary_email'=>$request['secondary_email'],
            'phone'=>$request['phone'],
            'house'=>$request['house'],
            'road'=>$request['road'],
            'postcode'=>$request['postcode'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'country'=>$request['country'],
            'describe_address'=>$request['describe_address'],
        ];
    }
}
