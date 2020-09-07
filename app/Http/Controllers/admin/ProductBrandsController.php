<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductBrandsController extends Controller
{
    public function index()
    {
    	return view('admin.modules.brands.index');
    }

    public function add_brand()
    {
    	return view('admin.modules.brands.add');
    }
}
