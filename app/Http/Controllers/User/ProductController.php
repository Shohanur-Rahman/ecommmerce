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
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index($category, Request $request)
    {


        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;
        $colorId = $request->query('color') ? $request->query('color') : 0;
        $order = $request->query('order') ? $request->query('order') : 0;
        $requestString = $request->all();


        $orderColumn = "";
        $orderOrdering = "";
        $sortText = "Default";

        if ($order == 0) {
            $orderColumn = "products.id";
            $orderOrdering = "desc";
            $sortText = "Default";
        } else if ($order == 1) {
            $orderColumn = "products.title";
            $orderOrdering = "asc";
            $sortText = "A - Z";
        } else if ($order == 2) {
            $orderColumn = "products.title";
            $orderOrdering = "desc";
            $sortText = "Z - A";
        } else if ($order == 3) {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        } else if ($order == 4) {
            $orderColumn = "products.new_price";
            $orderOrdering = "desc";
            $sortText = "Price High - Low";
        } else {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        }

        $categoryDetails = ProductCategory::where('slug', $category)->first();

        if (is_null($categoryDetails)) {
            return view('user.error_pages.404');
        }

        $products = new Products();

        if ($brandId > 0)
            $products = DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('products.is_published', 1)
                ->where('product_category_maps.cat_id', $categoryDetails->id)
                ->where('products.new_price', '>=', $minPrice)
                ->where('products.new_price', '<=', $mixPrice)
                ->where('products.brand_id', $brandId)
                ->orderBy($orderColumn, $orderOrdering)
                ->distinct()
                ->paginate($page_size);
        else {
            $products = DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('products.is_published', 1)
                ->where('product_category_maps.cat_id', $categoryDetails->id)
                ->where('products.new_price', '>=', $minPrice)
                ->where('products.new_price', '<=', $mixPrice)
                ->orderBy($orderColumn, $orderOrdering)
                ->distinct()
                ->paginate($page_size);
        }

        $brands = ProductBrands::all();
        $colors = ProductColor::all();

        //$products = ProductCategoryMap::with('product')->where(['cat_id' => $categoryDetails->id, 'is_published' => 1])->paginate($page_size);

        return view('user.pages.products.index', compact("products", "categoryDetails", "requestString", "brands", "colors", 'sortText'));
    }

    public function search(Request $request)
    {

        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;
        $order = $request->query('order') ? $request->query('order') : 0;
        //$colorId = $request->query('color') ? $request->query('color') : 0;
        $searchText = $request->query('s') ? $request->query('s') : '';
        $requestString = $request->all();

        $orderColumn = "";
        $orderOrdering = "";
        $sortText = "Default";

        if ($order == 0) {
            $orderColumn = "products.id";
            $orderOrdering = "desc";
            $sortText = "Default";
        } else if ($order == 1) {
            $orderColumn = "products.title";
            $orderOrdering = "asc";
            $sortText = "A - Z";
        } else if ($order == 2) {
            $orderColumn = "products.title";
            $orderOrdering = "desc";
            $sortText = "Z - A";
        } else if ($order == 3) {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        } else if ($order == 4) {
            $orderColumn = "products.new_price";
            $orderOrdering = "desc";
            $sortText = "Price High - Low";
        } else {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        }


        $products = new Products();

        if ($brandId > 0) {

            $products = DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('products.is_published', 1)
                ->where('products.title', 'like', '%' . $searchText . '%')
                ->where('products.new_price', '>=', $minPrice)
                ->where('products.new_price', '<=', $mixPrice)
                ->where('products.new_price', '<=', $mixPrice)
                ->where('products.brand_id', $brandId)
                ->orderBy($orderColumn, $orderOrdering)
                ->distinct()
                ->paginate($page_size);
        } else {

            $products = DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('products.is_published', 1)
                ->where('products.title', 'like', '%' . $searchText . '%')
                ->where('products.new_price', '>=', $minPrice)
                ->where('products.new_price', '<=', $mixPrice)
                ->orderBy($orderColumn, $orderOrdering)
                ->distinct()
                ->paginate($page_size);
        }


        $categories = ProductCategory::with('childrens')->where('parent_id', 0)->get();
        $brands = ProductBrands::all();
        $colors = ProductColor::all();

        //dd($categories);

        return view('user.pages.products.search', compact('products', 'categories', 'brands', 'colors', 'sortText'));
    }

    public function details($category, $slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id', $product->id)->get();

        return view('user.pages.products.details', compact('product', 'categoryList', 'galleries', 'productReviews'));
    }

    public function show($slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id', $product->id)->get();

        return view('user.pages.products.details', compact('product', 'categoryList', 'galleries', 'productReviews'));
    }

    public function add_to_cart(Request $request)
    {
        $cartItem = CartItem::where(['product_id' => $request->product_id, 'user_id' => Auth::id()])->first();

        if ($cartItem == null)
            $cartItem = new CartItem();

        if ($cartItem)
            $cartItem->quantity = ($cartItem->quantity + $request->quantity);
        else
            $cartItem->quantity = $request->quantity;

        $cartItem->user_id = Auth::id();
        $cartItem->product_id = $request->product_id;
        $cartItem->save();

        $myCartList = CartItem::with('product')->where('user_id', Auth::id())->take(5)->get();
        $arr = array('data' => $myCartList, 'status' => true);

        return Response()->json($arr);
    }

}
