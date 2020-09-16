<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductCategoryMap;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($category, Request $request)
    {

        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $requestString = $request->all();

        $categoryDetails = ProductCategory::where('slug', $category)->first();
        /*$products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->distinct()
            ->paginate(5);*/


        $products = ProductCategoryMap::with('product')->where(['cat_id' => $categoryDetails->id, 'is_published' => 1])->paginate($page_size);

        return view('user.pages.products.index', compact("products", "categoryDetails", "requestString"));
    }

    public function details($category, $slug)
    {
        $product = Products::where('slug', $slug)->first();
        return view('user.pages.products.details', compact('product'));
    }
}
