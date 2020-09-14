<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\Settings\EcomSupport;
use Illuminate\Http\Request;

class EcomSupportController extends Controller
{
    public function index()
    {
        $ecomSupports= EcomSupport::all();
        return view('admin.modules.settings.website.ecom_supports.index', compact("ecomSupports"));
}

    public function create()
    {

        return view('admin.modules.settings.website.ecom_supports.create');
    }

    public function store(Request $request)
    {

        $helper = new HelperController();

        EcomSupport::create([
           'name'=>$request['name'],
           'description'=>$request['description'],
           'image_url'=>$helper->uploadImage($request->File('image_url'), 'uploads/e-com/supports/'),
           'is_published' =>$request->has('image_url')
        ]);

        return redirect(route('ecom-supports.index'))->with('success','New E-commerce Support Created Successfully');
    }

    public function edit(EcomSupport $ecomSupport)
    {

        return view('admin.modules.settings.website.ecom_supports.edit', compact("ecomSupport"));
    }

    public function update(Request $request, EcomSupport $ecomSupport)
    {
        $helper = new HelperController();
        $imageUpload = $helper->uploadImage($request->File('image_url'), 'uploads/e-com/supports/');

        if($imageUpload ){
            if($ecomSupport->image_url){
                @unlink($ecomSupport->image_url);
            }
        }else{
            $imageUpload = $ecomSupport->image_url;
        }

        $ecomSupport->update([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'image_url'=>$imageUpload,
            'is_published' =>$request->has('is_published')
        ]);



        return redirect(route('ecom-supports.index'))->with('success','E-commerce Support Successfully');
    }

    public function destroy(EcomSupport $ecomSupport)
    {
        $ecomSupport->delete();

        return redirect(route('ecom-supports.index'))->with('success','E-commerce Support Successfully');
    }
}
