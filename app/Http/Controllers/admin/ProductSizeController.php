<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSizeController extends Controller
{
    public function index()
    {
        $productSizes = ProductSize::all();

        return view('admin.modules.product_sizes.index',compact('productSizes'));
    }

    public function create()
    {
        return view('admin.modules.product_sizes.create');
    }

    public function store(Request $request)
    {
        ProductSize::create([
            'user_id'=>Auth::id(),
            'size'=>$request['size'],
        ]);

        return redirect(route('product-sizes.index'))->with('success','New Product Size Created Successfully');
    }

    public function edit(ProductSize $productSize)
    {

        return view('admin.modules.product_sizes.edit',compact('productSize'));
    }

    public function update(Request $request, ProductSize $productSize)
    {
        $productSize->update([
            'user_id'=>Auth::id(),
            'size'=>$request['size'],
        ]);

        return redirect(route('product-sizes.index'))->with('success','Product Size Updated Successfully');
    }

    public function destroy(ProductSize $productSize)
    {
        $productSize->delete();

        return redirect(route('product-sizes.index'))->with('success','Product Size Deleted Successfully');
    }
}
