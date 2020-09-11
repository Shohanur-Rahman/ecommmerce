<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\HelperController;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Warehouse;
use App\Models\ProductAvailability;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductTags;
use App\Models\ProductSize;
use App\Models\ProductColor;
use App\Models\ProductCategoryMap;
use App\Models\ProductTagMap;
use App\Models\ProductGalleryMap;
use Auth;
class ProductsController extends CommonController
{
    public function index()
    {
        $products = null;
        $userType = Auth::user()->user_type;

        if($userType == "vendor")
    	   $products = Products::where('user_id', Auth::id())->get();

        elseif ($userType == "admin")
            $products = Products::all();

    	return view('admin.modules.products.index', compact("products"));
    }


    public function add_product()
    {
        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::all();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();

    	return view('admin.modules.products.add', compact("warehouses", "avalabilitites", "categories", "brands","tags", "productSizes", "productColors"));
    }

    public function save_product(Request $request)
    {
        //dd($request->all());
        $helper = new HelperController();
        $product = new Products();
        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->is_published = $request->has('is_published');
        $product->is_new = $request->has('is_new');
        $product->allow_review = $request->has('allow_review');
        $product->show_on_home = $request->has('show_on_home');
        $product->user_id = Auth::id();
        $product->availability_id = $request->availability_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->brand_id = $request->brand_id;
        $product->available_start_date = $request->available_start_date;
        $product->available_end_date = $request->available_end_date;
        $product->is_inventory = $request->has('is_inventory');

        if($request->has('is_inventory')){
            $product->inventory_qty = $request->inventory_qty;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
            $product->notify_low_inventory = $request->has('notify_low_inventory');
            $product->show_availability = $request->has('show_availability');
            $product->Warehouse_id = $request->Warehouse_id;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
        }

        $product->allow_seo = $request->has('allow_seo');

        if($request->has('allow_seo')){
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
        }

        

        $fileURL = $helper->uploadImage($request->file('imgInp'),'uploads/products/u_'.Auth::id() . "/");

        $product->featured_image = $fileURL;



        $product->save();


        if($files=$request->file('images')){
            foreach($files as $file){
                $glURL = $helper->uploadImage($file,'uploads/products/u_'.Auth::id() . "/gallery/");
                $gallery = new ProductGalleryMap();
                $gallery->image_url = $glURL;
                $gallery->product_id = $product->id;
                $gallery->save();
            }
        }



        if($request->categories){
            $catArray = explode(',', $request->categories);

            foreach($catArray as $catId) {
                $categoryMap = new ProductCategoryMap();
                $categoryMap->cat_id = $catId;
                $categoryMap->product_id = $product->id;
                $categoryMap->save();
            }
        }

        if($request->tags){
            $tagArray = explode(',', $request->tags);

            foreach($tagArray as $catId) {
                $tagMap = new ProductTagMap();
                $tagMap->tag_id = $catId;
                $tagMap->product_id = $product->id;
                $tagMap->save();
            }
        }

         return redirect(route('products'))->with('success','Your product has been successfully added.');
        
    }
}
