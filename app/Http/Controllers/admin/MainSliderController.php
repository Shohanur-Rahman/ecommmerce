<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\MainSlider;
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
        return view('admin.modules.main_sliders.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

        return redirect(route('main-sliders.index'))->with('success','Main Slider is Created Successfully');
    }

    public function edit(MainSlider $mainSlider)
    {

        return view('admin.modules.main_sliders.edit');
    }

    public function update(Request $request,  MainSlider $mainSlider)
    {
        dd($request->all());
        return redirect(route('main-sliders.index'))->with('success','Main Slider is Updated Successfully');
    }

    public function destroy( MainSlider $mainSlider)
    {
        $mainSlider->delete();

        return redirect(route('main-sliders.index'))->with('success','Main Slider is Deleted Successfully');
    }
}
