<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\NewArrivalTab;
use App\Models\ProductCategory;

class NewArrivalController extends Controller
{
    public function index()
    {

    	$tabList = NewArrivalTab::all();
    	return view('admin.modules.settings.website.arrivals.index', compact("tabList"));
    }

    public function add_arrival()
    {

    	$Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();
    	return view('admin.modules.settings.website.arrivals.add', compact("Categories"));
    }

    public function edit_arrival($id)
    {

    	$Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();
    	$arrival = NewArrivalTab::find($id);
    	return view('admin.modules.settings.website.arrivals.edit', compact("Categories", "arrival"));
    }

    public function save_arrival(Request $request)
    {

    	$tab = new NewArrivalTab();
    	$tab->cat_id= $request->cat_id;
    	$tab->no_of_product= $request->no_of_product;
    	$tab->is_published= $request->has('is_published');
    	$tab->save();

    	return redirect(route('arrivals'))->with('success','Your arrivals tab has been successfully added.');
    }

    public function update_arrival(Request $request, $id)
    {

    	$tab = NewArrivalTab::find($id);
    	$tab->cat_id= $request->cat_id;
    	$tab->no_of_product= $request->no_of_product;
    	$tab->is_published= $request->has('is_published');
    	$tab->save();

    	return redirect(route('arrivals'))->with('success','Your arrivals tab has been successfully updated.');
    }
}
