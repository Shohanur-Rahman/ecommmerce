<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {

        $siteSetting = SiteSetting::firstOrFail();

        return view('admin.modules.settings.website.site_settings.edit',compact('siteSetting'));
    }

    public function update(Request $request, SiteSetting $siteSetting)
    {
        $helper = new HelperController();
        $imageUpload = $helper->uploadImage($request->File('logo_url'), 'uploads/e-com/site_setting/');

        if($imageUpload ){
            if($siteSetting->logo_url){
                @unlink($siteSetting->logo_url);
            }
        }else{
            $imageUpload = $siteSetting->logo_url;
        }

        $siteSetting->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'description'=>$request['description'],
            'logo_url'=>$imageUpload,
        ]);

        return redirect()->back()->with('success','Site Setting has been Updated successfully');
    }
}
