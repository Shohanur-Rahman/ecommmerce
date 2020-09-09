<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    public function index()
    {
        $productCategories = ProductCategory::with('children')->get();

        return view('admin.modules.product_categories.index',compact('productCategories'));
    }

    public function create()
    {
        $Categories = ProductCategory::where('parent_id',0)->with('user')->get();

        return view('admin.modules.product_categories.create',compact('Categories'));
    }

    public function store(Request $request)
    {
        $userId = Auth()->id();

        ProductCategory::create([
            'category_name'=>$request['category_name'],
            'parent_id'=>$request['parent_id'] ?? 0,
            'user_id'=>$userId,
            'is_top_menu'=>$request['is_top_menu'] ?? '0'
        ]);

        return redirect(route('product_categories.index'))->with('success','New ProductCategory Added Successfully');
    }

    public function edit(ProductCategory $productCategory)
    {
        $Categories = ProductCategory::where('parent_id',0)->with('user')->get();

        return view('admin.modules.product_categories.edit',compact('productCategory','Categories'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $userId = Auth()->id();

        $productCategory->update([
            'category_name'=>$request['category_name'],
            'parent_id'=>$request['parent_id'] ?? 0,
            'user_id'=>$userId,
            'is_top_menu'=>$request['is_top_menu'] ?? '0'
        ]);

        return redirect(route('product_categories.index'))->with('success','Category Updated Successfully');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $this->authorize('isAdmin');

        $productCategory->children->each(function ($children){
            $children->update(['parent_id'=>0]);
        });

        $productCategory->delete();

        return redirect(route('product_categories.index'))->with('success','Category Deleted Successfully');
    }

}
