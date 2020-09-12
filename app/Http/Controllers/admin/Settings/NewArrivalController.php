<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewArrivalController extends Controller
{
    public function index()
    {
    	return view('admin.modules.settings.website.arrivals.index');
    }
}
