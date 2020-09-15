<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductBrandCategoryMap;
use DB;
use Carbon\Carbon;
use File;
use Mail;
use Illuminate\Support\Str;
use Auth;

class ProductBrandsController extends Controller
{
    public function index()
    {
        $brands = null;
        $userType = Auth::user()->user_type;

        $brands = ProductBrands::all();
    	return view('admin.modules.brands.index', compact("brands"));
    }

    public function create()
    {
        $categories = ProductCategory::where('parent_id',0)->with('user','childrens.childrens.user')->get();
    	return view('admin.modules.brands.create', compact("categories"));
    }

    public function store(Request $req)
    {
    	$brand = new ProductBrands();
    	$brand->name = $req->name;
        $brand->user_id = Auth::id();

    	$fileURL = "";

        if ($req->file('imgInp')) {
            $file = $req->file('imgInp');
            $filename = $file->getClientOriginalName();
            $mainFolder = Carbon::now()->format('F_Y');
            $subFolder = Carbon::now()->format('d');
            $destinationPath = 'uploads/brand/' . $mainFolder . "/" . $subFolder;
            $current_timestamp = Carbon::now()->timestamp;

            if (!File::isDirectory($destinationPath)) {
                //File::makeDirectory($destinationPath);
                File::makeDirectory(public_path() . '/' . $destinationPath, 0777, true);
            }

            $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

            $file->move($destinationPath, $savingFileName);

            $fileURL = $destinationPath . "/" . $savingFileName;
            $brand->image = $fileURL;
        }

        $brand->save();

        $catArray = explode(',', $req->categories);

        foreach($catArray as $catId) {
            $categoryMap = new ProductBrandCategoryMap();
            $categoryMap->cat_id = $catId;
            $categoryMap->brand_id = $brand->id;
            $categoryMap->save();
        }

        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully added.');
    }


    public function edit($id)
    {
        $brand = null;
        $userType = Auth::user()->user_type;

        $brand = ProductBrands::findOrFail($id);

        if($brand == null)
            return view('not_found');

        $categoriMap = ProductBrandCategoryMap::where('brand_id', $id)->get();
        $existingCatMap="";
        foreach ($categoriMap as $key) {
            if($existingCatMap == "")
                $existingCatMap=$key->cat_id;
            else
                $existingCatMap =$existingCatMap.",".$key->cat_id;
        }

        $categories = ProductCategory::all();

        return view('admin.modules.brands.edit', compact("brand", "categories", "existingCatMap"));
    }



    public function update(Request $req, $id)
    {

    	$brand = ProductBrands::findOrFail($id);
    	$brand->name = $req->name;

    	$fileURL = "";

        if ($req->file('imgInp')) {
            $file = $req->file('imgInp');
            $filename = $file->getClientOriginalName();
            $mainFolder = Carbon::now()->format('F_Y');
            $subFolder = Carbon::now()->format('d');
            $destinationPath = 'uploads/brand/' . $mainFolder . "/" . $subFolder;
            $current_timestamp = Carbon::now()->timestamp;

            if (!File::isDirectory($destinationPath)) {
                //File::makeDirectory($destinationPath);
                File::makeDirectory(public_path() . '/' . $destinationPath, 0777, true);
            }

            $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

            $file->move($destinationPath, $savingFileName);

            $fileURL = $destinationPath . "/" . $savingFileName;
            $brand->image = $fileURL;
        }

        $categoriMap = ProductBrandCategoryMap::where('brand_id', $id)->delete();

        $brand->save();

        //dd($req->categories);

        $catArray = explode(',', $req->categories);

        foreach($catArray as $catId) {
            $categoryMap = new ProductBrandCategoryMap();
            $categoryMap->cat_id = $catId;
            $categoryMap->brand_id = $brand->id;
            $categoryMap->save();
        }


        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully updated.');
    }

    public function destroy(ProductBrands $brand)
    {
        $child = $brand->categories()->delete();
        if($brand->image)
            @unlink($brand->image);
        $brand->delete();
        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully deleted.');

    }
}
