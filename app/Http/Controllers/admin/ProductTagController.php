<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductTags;
use Auth;
class ProductTagController extends Controller
{
    public function index()
    {
        $tags = null;
        $userType = Auth::user()->user_type;

        if($userType == "Vendor")
    	   $tags = ProductTags::where('user_id', Auth::id())->get();

        elseif ($userType == "Admin")
            $tags = ProductTags::all();

    	return view('admin.modules.tags.index', compact("tags"));
    }

    public function create()
    {
        return view('admin.modules.tags.create');
    }


    public function store(Request $req)
    {
        $tag = new ProductTags();
        $tag->name = $req->name;
        $tag->user_id = Auth::id();

        $tag->save();

        return redirect()->route('tags.index')->with('message', 'Your tag has been successfully added.');
    }

    public function edit($id)
    {
        $tag = null;
        $userType = Auth::user()->user_type;

        if($userType == "Vendor"){

            $cmtQry = ['user_id' => Auth::id(), 'id' => $id];
            $tag = ProductTags::where($cmtQry)->first();
        }
        elseif ($userType == "Admin")
            $tag = ProductTags::find($id);

        if($tag == null)
            return view('not_found');

        return view('admin.modules.tags.edit', compact("tag"));
    }

    public function update(Request $req, $id)
    {
        $tag = ProductTags::find($id);
        $tag->name = $req->name;
        $tag->save();

        return redirect()->route('tags.index')->with('message', 'Your tag has been successfully updated.');
    }


    public function destroy($id)
    {
        $tag = ProductTags::find($id);
        if($tag == null)
            return view('not_found');

        $tag->delete();

        return redirect()->route('tags.index')->with('message', 'Your tag has been successfully delete.');

    }
}
