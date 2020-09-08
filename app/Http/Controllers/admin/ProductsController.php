<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Auth;

class ProductsController extends Controller
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
    	return view('admin.modules.products.add');
    }
}
