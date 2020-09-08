<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.modules.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.modules.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'required|string',
            'parent_id'=>'',
            'menu'=>'',
            'top_menu'=>'',
        ]);

        $userId = Auth()->id();

        Category::create([
            'category_name'=>$request['category_name'],
            'parent_id'=>0,
            'user_id'=>$userId,
            'menu'=>$request['menu'] ?? '0',
            'top_menu'=>$request['top_menu'] ?? '0'
        ]);

        return redirect(route('categories.index'))->with('success','New Category Added Successfully');
    }

    public function edit(Category $category)
    {

    }

    public function update(Category $category)
    {

    }

    public function destroy(Category $category)
    {

    }
}
