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

        return redirect()->route('tags.index')->with('message', 'Your product tab has been successfully added.');
    }

    public function edit($id)
    {
        $tag = null;
        $tag = ProductTags::findOrFail($id);

        $this->authorize('access-settings',$tag);


        $userType = Auth::user()->user_type;


        $tag = ProductTags::findOrFail($id);

        if($tag == null)
            return view('not_found');

        return view('admin.modules.tags.edit', compact("tag"));
    }

    public function update(Request $req, $id)
    {
        $tag = ProductTags::findOrFail($id);

        $this->authorize('access-settings',$tag);

        $tag->name = $req->name;
        $tag->save();

        return redirect()->route('tags.index')->with('message', 'Your product tab has been successfully updated.');
    }


    public function destroy($id)
    {
        $tag = ProductTags::findOrFail($id);

        $this->authorize('access-settings',$tag);

        if($tag == null)
            return view('not_found');

        $tag->delete();

        return redirect()->route('tags.index')->with('message', 'Your product tag has been successfully deleted.');

    }
}
