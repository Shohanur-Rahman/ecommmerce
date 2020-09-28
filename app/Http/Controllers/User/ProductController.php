<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductBrandCategoryMap;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductCategoryMap;
use App\Models\ProductGalleryMap;
use App\Models\ProductColor;
use App\Models\User\CartItem;
use App\Models\User\ProductReview;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Auth;

class ProductController extends Controller
{

    public function index($category, Request $request)
    {



        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;
        $colorId = $request->query('color') ? $request->query('color') : 0;
        $requestString = $request->all();


        $categoryDetails = ProductCategory::where('slug', $category)->first();

        if(is_null($categoryDetails)){
           return view('user.error_pages.404');
        }

        $products = new Products();

        if($brandId > 0 && $colorId > 0)
            $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice)
            ->where('products.brand_id', '<=', $brandId)
            ->where('products.color_id', '<=', $colorId)
            ->distinct()
            ->paginate($page_size);
        elseif ($brandId > 0) {
            $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice)
            ->distinct()
            ->paginate($page_size);
        }elseif ($colorId > 0) {
            $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice)
            ->distinct()
            ->paginate($page_size);
        }else{
            $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice)
            ->distinct()
            ->paginate($page_size);
        }

        $brands = ProductBrandCategoryMap::with('brand')->where('cat_id',$categoryDetails->id)->get();
        $colors = ProductColor::all();


        //$products = ProductCategoryMap::with('product')->where(['cat_id' => $categoryDetails->id, 'is_published' => 1])->paginate($page_size);

        return view('user.pages.products.index', compact("products", "categoryDetails", "requestString", "brands", "colors"));
    }
    public function search(Request $request)
    {

        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;
        $colorId = $request->query('color') ? $request->query('color') : 0;
        $searchText = $request->query('s') ? $request->query('s') : '';
        $requestString = $request->all();

        $products = DB::table('products')
        ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
        ->select('products.*')
        ->where('products.is_published', 1)
        ->where('products.title','like', '%'.$searchText.'%')
        ->where('products.new_price', '>=', $minPrice)
        ->where('products.new_price', '<=', $mixPrice)
        ->distinct()
        ->paginate($page_size);

        $categories = ProductCategory::with('childrens')->where('parent_id', 0)->get();
        $brands = ProductBrands::all();
        $colors = ProductColor::all();

        //dd($categories);

        return view('user.pages.products.search', compact('products', 'categories','brands','colors'));
    }

    public function details($category, $slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id',$product->id)->get();

        return view('user.pages.products.details', compact('product','categoryList','galleries','productReviews'));
    }

    public function show($slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id',$product->id)->get();

        return view('user.pages.products.details', compact('product','categoryList','galleries','productReviews'));
    }

    public function add_to_cart(Request $request)
    {
        $cartItem = CartItem::where(['product_id' => $request->product_id, 'user_id' => Auth::id()])->first();

        if($cartItem == null)
            $cartItem = new CartItem();

        if($cartItem)
            $cartItem->quantity=($cartItem->quantity+$request->quantity);
        else
            $cartItem->quantity = $request->quantity;

        $cartItem->user_id = Auth::id();
        $cartItem->product_id = $request->product_id;
        $cartItem->save();

        return redirect()->back();
    }
}
