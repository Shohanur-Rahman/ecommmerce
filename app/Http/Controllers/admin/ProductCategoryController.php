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
        $productCategories = ProductCategory::with('parent')->get();

        return view('admin.modules.product_categories.index',compact('productCategories'));
    }

    public function create()
    {
        $Categories = ProductCategory::where('parent_id',0)->with('user','childrens.user')->get();

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
            'is_top_menu'=>$request->has('is_top_menu'),
        ]);

        return redirect(route('product-categories.index'))->with('success','Your product category has been successfully added.');
    }

    public function edit(ProductCategory $productCategory)
    {
        $this->authorize('access-settings',$productCategory);

        $Categories = ProductCategory::where('parent_id',0)->with('user','childrens.user')->get();

        return view('admin.modules.product_categories.edit',compact('productCategory','Categories'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $this->authorize('access-settings',$productCategory);

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
            'is_top_menu'=>$request->has('is_top_menu'),
        ]);

        return redirect(route('product-categories.index'))->with('success','Your product category has been successfully updated.');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $this->authorize('access-settings',$productCategory);

        if( $productCategory->children){
            $productCategory->children->each(function ($children){
                $children->update(['parent_id'=>0]);
            });
        }

        $productCategory->delete();

        return redirect(route('product-categories.index'))->with('success','Your product category has been successfully deleted.');
    }

}
