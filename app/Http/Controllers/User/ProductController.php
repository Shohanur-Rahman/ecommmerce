<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function details($category, $slug)
    {
        $product = Products::where('slug', $slug)->first();
        return view('user.pages.products.details', compact('product'));
    }
}
