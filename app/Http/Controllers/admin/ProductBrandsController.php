<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductBrands;
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

        if($userType == "vendor")
    	   $brands = ProductBrands::where('user_id', Auth::id())->get();

        elseif ($userType == "admin")
            $brands = ProductBrands::all();

    	return view('admin.modules.brands.index', compact("brands"));
    }

    public function add_brand()
    {
    	return view('admin.modules.brands.add');
    }


    public function edit_brand($id)
    {
    	$brand = null;
        $userType = Auth::user()->user_type;

        if($userType == "vendor"){

            $cmtQry = ['user_id' => Auth::id(), 'id' => $id];
            $brand = ProductBrands::where($cmtQry)->get();
        }
        elseif ($userType == "admin")
            $brand = ProductBrands::find($id);

    	if($brand == null)
    		return view('not_found');

    	return view('admin.modules.brands.edit', compact("brand"));
    }

    public function delet_brand($id)
    {
    	$brand = ProductBrands::find($id);
    	if($brand == null)
    		return view('not_found');

    	$brand->delete();

    	return redirect()->route('brands')->with('message', 'Your brand has been successfully delete.');

    }

    public function save_brand(Request $req)
    {
    	$brand = new ProductBrands();
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


        $brand->save();

        return redirect()->route('brands')->with('message', 'Your brand has been successfully added.');
    }

    public function update_brand(Request $req, $id)
    {

    	$brand = ProductBrands::find($id);
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


        $brand->save();

        return redirect()->route('brands')->with('message', 'Your brand has been successfully updated.');
    }
}
