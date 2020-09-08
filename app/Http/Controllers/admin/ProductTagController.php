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

        if($userType == "vendor")
    	   $tags = ProductTags::where('user_id', Auth::id())->get();

        elseif ($userType == "admin")
            $tags = ProductTags::all();

    	return view('admin.modules.tags.index', compact("tags"));
    }

    public function add_tag()
    {
        return view('admin.modules.tags.add');
    }


    public function edit_tag($id)
    {
        $tag = null;
        $userType = Auth::user()->user_type;

        if($userType == "vendor"){

            $cmtQry = ['user_id' => Auth::id(), 'id' => $id];
            $tag = ProductTags::where($cmtQry)->get();
        }
        elseif ($userType == "admin")
            $tag = ProductTags::find($id);

        if($tag == null)
            return view('not_found');

        return view('admin.modules.tags.edit', compact("tag"));
    }


    public function save_tag(Request $req)
    {
        $tag = new ProductTags();
        $tag->name = $req->name;
        $tag->user_id = Auth::id();

        $tag->save();

        return redirect()->route('tags')->with('message', 'Your tag has been successfully added.');
    }

    public function update_tag(Request $req, $id)
    {
        $tag = ProductTags::find($id);
        $tag->name = $req->name;
        $tag->save();

        return redirect()->route('tags')->with('message', 'Your tag has been successfully updated.');
    }


    public function delete_tag($id)
    {
        $tag = ProductTags::find($id);
        if($tag == null)
            return view('not_found');

        $tag->delete();

        return redirect()->route('tags')->with('message', 'Your tag has been successfully delete.');

    }
}
