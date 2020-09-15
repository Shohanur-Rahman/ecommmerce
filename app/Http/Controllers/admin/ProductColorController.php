<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ProductColor::create([
            'user_id'=>Auth::id(),
            'color'=>$request['color'],
        ]);

        return redirect(route('product-colors.index'))->with('success','Product Color has been created Successfully');
    }

    public function edit(ProductColor $productColor)
    {

        return view('admin.modules.product_colors.edit',compact('productColor'));
    }

    public function update(Request $request, ProductColor $productColor)
    {
        $productColor->update([
            'user_id'=>Auth::id(),
            'color'=>$request['color'],
        ]);

        return redirect(route('product-colors.index'))->with('success','Product Color has been updated successfully');
    }

    public function destroy(ProductColor $productColor)
    {
        $productColor->delete();

        return redirect(route('product-colors.index'))->with('success','Product Color has been deleted successfully');
    }
}
