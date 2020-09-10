<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index()
    {
        $productColors = ProductColor::all();

        return view('admin.modules.product_colors.index',compact('productColors'));
    }

    public function create()
    {
        return view('admin.modules.product_colors.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return redirect(route('product-colors.index'))->with('success','New Product Color Created Successfully');
    }

    public function edit(ProductColor $productColor)
    {

        return view('admin.modules.product_colors.edit',compact('productColor'));
    }

    public function update(Request $request, ProductColor $productColor)
    {
        dd($request->all());
        return redirect(route('product-colors.index'))->with('success','Product Color Updated Successfully');
    }

    public function destroy(ProductColor $productColor)
    {
        $productColor->delete();

        return redirect(route('product-colors.index'))->with('success','Product Color Deleted Successfully');
    }
}
