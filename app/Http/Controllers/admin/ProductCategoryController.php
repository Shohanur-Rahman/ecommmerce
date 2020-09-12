<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{

    public function index()
    {
        $productCategories = ProductCategory::with('childrens')->get();

        return view('admin.modules.product_categories.index',compact('productCategories'));
    }

    public function create()
    {
        $Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();

        return view('admin.modules.product_categories.create',compact('Categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'unique:product_categories'
        ]);

        $categoryName = $request['category_name'];

        $userId = Auth()->id();

        ProductCategory::create([
            'category_name'=>$categoryName,
            'slug'=>Str::slug($categoryName),
            'parent_id'=>$request['parent_id'] ?? 0,
            'user_id'=>$userId,
            'is_top_menu'=>$request['is_top_menu'] ?? '0'
        ]);

        return redirect(route('product-categories.index'))->with('success','New ProductCategory Added Successfully');
    }

    public function edit(ProductCategory $productCategory)
    {
        $Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();

        return view('admin.modules.product_categories.edit',compact('productCategory','Categories'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $this->validate($request,[
            'category_name'=>'unique:product_categories,category_name,'.$productCategory->id,
        ]);

        $userId = Auth()->id();

        $categoryName = $request['category_name'];

        $productCategory->update([
            'category_name'=>$categoryName,
            'slug'=>Str::slug($categoryName),
            'parent_id'=>$request['parent_id'] ?? 0,
            'user_id'=>$userId,
            'is_top_menu'=>$request['is_top_menu'] ?? '0'
        ]);

        return redirect(route('product-categories.index'))->with('success','Category Updated Successfully');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $this->authorize('isAdmin');

        $productCategory->children->each(function ($children){
            $children->update(['parent_id'=>0]);
        });

        $productCategory->delete();

        return redirect(route('product-categories.index'))->with('success','Category Deleted Successfully');
    }

}
