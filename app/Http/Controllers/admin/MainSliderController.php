<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\MainSlider;
use App\Models\ProductCategory;
use App\Models\Products;
use Carbon\Carbon;
use Faker\Provider\File;
use Illuminate\Http\Request;

class MainSliderController extends Controller
{
    public function index()
    {
        $mainSliders = MainSlider::all();

        return view('admin.modules.main_sliders.index',compact('mainSliders'));
    }

    public function create()
    {
        $categories = ProductCategory::all('id','category_name');
        $products = Products::all('id','title');

        return view('admin.modules.main_sliders.create',compact('categories','products'));
    }

    public function store(Request $request)
    {
        MainSlider::create([
            'product_id'=>$request['product_id'],
            'category_id'=>$request['category_id'],
            'name'=>$request['name'],
            'caption'=>$request['caption'],
            'image_url'=>$this->imageUpload($request->File('image_url')) ?? '',
        ]);

        return redirect(route('main-sliders.index'))->with('success','Main Slider is Created Successfully');
    }

    public function edit(MainSlider $mainSlider)
    {
        $categories = ProductCategory::all('id','category_name');
        $products = Products::all('id','title');

        return view('admin.modules.main_sliders.edit',compact('mainSlider','categories','products'));
    }

    public function update(Request $request,  MainSlider $mainSlider)
    {

        if($mainSlider->image_url){
            @unlink($mainSlider->image_url);
        }

        $mainSlider->update([
            'product_id'=>$request['product_id'],
            'category_id'=>$request['category_id'],
            'name'=>$request['name'],
            'caption'=>$request['caption'],
            'image_url'=>$this->imageUpload($request->File('image_url')) ?? '',
        ]);

        return redirect(route('main-sliders.index'))->with('success','Main Slider is Updated Successfully');
    }

    public function destroy( MainSlider $mainSlider)
    {
        $mainSlider->delete();

        return redirect(route('main-sliders.index'))->with('success','Main Slider is Deleted Successfully');
    }

    public function imageUpload($image)
    {
        if($image){
            $file = $image;
            $originalName = $file->getClientOriginalName();
            $mainFolder = Carbon::now()->format('F_Y');
            $subFolder = Carbon::now()->format('d');
            $destinationPath = 'uploads/sliders/mainSlider'.'/' . $mainFolder .'/'. $subFolder.'/';

            $fileName = time().'_'.$originalName;
            $path = $destinationPath . $fileName;

            $file->move($destinationPath,$fileName);

            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        }

        return $path;
    }
}
