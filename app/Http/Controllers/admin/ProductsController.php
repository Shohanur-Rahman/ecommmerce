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
use Illuminate\Support\Str;

class ProductsController extends HelperController
{
    public function index()
    {
        $products = null;
        $userType = Auth::user()->user_type;

        $products = Products::with('user')->get();

    	return view('admin.modules.products.index', compact("products"));
    }


    public function create ()
    {
        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::where('parent_id',0)->with('user','childrens.childrens.user')->get();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();

    	return view('admin.modules.products.create', compact("warehouses", "avalabilitites", "categories", "brands","tags", "productSizes", "productColors"));
    }

    public function edit($id)
    {
        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::where('parent_id',0)->with('user','childrens.childrens.user')->get();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();

        $aProduct = Products::find($id);

        $categoriMap = ProductCategoryMap::where('product_id', $id)->get();
        $existingCatMap="";
        foreach ($categoriMap as $key) {
            if($existingCatMap == "")
                $existingCatMap=$key->cat_id;
            else
                $existingCatMap =$existingCatMap.",".$key->cat_id;
        }


        $tagMap = ProductTagMap::where('product_id', $id)->get();
        $existingTagMap="";
        foreach ($tagMap as $key) {
            if($existingTagMap == "")
                $existingTagMap=$key->tag_id;
            else
                $existingTagMap =$existingTagMap.",".$key->tag_id;
        }


        $imgGallery = ProductGalleryMap::where('product_id', $id)->get();
        $galleryArray="";
        foreach ($imgGallery as $key) {
            if($galleryArray == "")
                $galleryArray= $key->id . ",".$key->image_url;
            else
                $galleryArray =$galleryArray."?".$key->id . ",".$key->image_url;
        }



        return view('admin.modules.products.edit', compact("warehouses", "avalabilitites", "categories", "brands","tags", "productSizes", "productColors", "aProduct", "existingCatMap", "existingTagMap", "galleryArray"));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $helper = new HelperController();

        /*
        *
        * Insert product table data **/

        $product = new Products();
        $product->title = $request->title;
        $product->slug = Str::slug( $request->title);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->is_published = $request->has('is_published');
        $product->is_new = $request->has('is_new');
        $product->is_feature = $request->has('is_feature');
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

        /*
        * Has inventory */
        if($request->has('is_inventory')){
            $product->inventory_qty = $request->inventory_qty;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
            $product->notify_low_inventory = $request->has('notify_low_inventory');
            $product->show_availability = $request->has('show_availability');
            $product->Warehouse_id = $request->Warehouse_id;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
        }

         /*
        * Check SEO switch */
        $product->allow_seo = $request->has('allow_seo');
        if($request->has('allow_seo')){
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
        }


        /*
        *
        * Upload featured image and return path url */
        $fileURL = $helper->uploadImage($request->file('imgInp'),'uploads/products/u_'.Auth::id() . "/",300,300);

        $product->featured_image = $fileURL;


        /*
        * Save Products **/
        $product->save();


        /*
        *
        *Upload and generate gallery image urls*/
        if($files=$request->file('images')){
            foreach($files as $file){
                $glURL = $helper->uploadImage($file,'uploads/products/u_'.Auth::id() . "/gallery/");
                $gallery = new ProductGalleryMap();
                $gallery->image_url = $glURL;
                $gallery->product_id = $product->id;
                $gallery->save();
            }
        }


        /*
        *
        *Save selected categories*/
        if($request->categories){
            $catArray = explode(',', $request->categories);

            foreach($catArray as $catId) {
                $categoryMap = new ProductCategoryMap();

                $categoryMap->cat_id = $catId;
                $categoryMap->is_published = $request->is_published;
                $categoryMap->product_id = $product->id;
                $categoryMap->save();
            }
        }

        /*
        *
        *Save selected tags*/
        if($request->tags){
            $tagArray = explode(',', $request->tags);

            foreach($tagArray as $catId) {
                $tagMap = new ProductTagMap();
                $tagMap->tag_id = $catId;
                $tagMap->product_id = $product->id;
                $tagMap->save();
            }
        }

         return redirect(route('products.index'))->with('success','Your product has been successfully added.');

    }


    public function update(Request $request, $id)
    {
        //dd($request->all());
        $helper = new HelperController();
        /*
        *
        * Insert product table data **/

        $product = Products::find($id);
        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->is_published = $request->has('is_published');
        $product->is_new = $request->has('is_new');
        $product->is_feature = $request->has('is_feature');
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

        /*
        * Has inventory */
        if($request->has('is_inventory')){
            $product->inventory_qty = $request->inventory_qty;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
            $product->notify_low_inventory = $request->has('notify_low_inventory');
            $product->show_availability = $request->has('show_availability');
            $product->Warehouse_id = $request->Warehouse_id;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
        }

        /*
        * Check SEO switch */
        $product->allow_seo = $request->has('allow_seo');
        if($request->has('allow_seo')){
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
        }


        /*
        *
        * Upload featured image and return path url */
        $fileURL  = $helper->uploadImage($request->file('imgInp'),'uploads/products/u_'.Auth::id() . "/",300,300);


        /*
        *
        * Has new path delete existing url */
        if($fileURL){
            if($product->featured_image)
                @unlink($product->featured_image);

            $product->featured_image = $fileURL;
        }

        /*
        * Save Products **/
        $product->save();




        /*
        *
        *Delete existing gallery images from server**/
        $imgGallery = ProductGalleryMap::where('product_id', $id)->get();
        $deleteGalery = ProductGalleryMap::where('product_id', $id)->delete();
        foreach ($imgGallery as $key) {
            @unlink($key->image_url);
        }


        //dd($request->file('images'));
        /*
        *
        *Upload and generate gallery image urls*/
        if($files=$request->file('images')){
            foreach($files as $file){
                $glURL = $helper->uploadImage($file,'uploads/products/u_'.Auth::id() . "/gallery/");
                $test = $helper->uploadImage($file,'uploads/products/u_'.Auth::id() . "/gallery/test/",600,600);
                $gallery = new ProductGalleryMap();
                $gallery->image_url = $glURL;
                $gallery->thumb_url = $test;
                $gallery->product_id = $product->id;
                $gallery->save();
            }
        }



        /*
        *
        *Delete existing categories**/
        $deleteCat = ProductCategoryMap::where('product_id', $id)->delete();

        /*
        *
        *Save selected categories*/
        if($request->categories){
            $catArray = explode(',', $request->categories);

            foreach($catArray as $catId) {
                $categoryMap = new ProductCategoryMap();
                $categoryMap->cat_id = $catId;
                $categoryMap->is_published = $request->is_published;
                $categoryMap->product_id = $product->id;
                $categoryMap->save();
            }
        }


        /*
        *
        *Delete existing tags*/
        $deleteTag = ProductTagMap::where('product_id', $id)->delete();

        /*
        *
        *Save selected tags*/
        if($request->tags){
            $tagArray = explode(',', $request->tags);

            foreach($tagArray as $catId) {
                $tagMap = new ProductTagMap();
                $tagMap->tag_id = $catId;
                $tagMap->product_id = $product->id;
                $tagMap->save();
            }
        }
         return redirect(route('products.index'))->with('success','Your product has been successfully updated.');

    }
}
