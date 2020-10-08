<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        $product_id = $request['product_id'];
        $sessionCheck = Session::has('session_id');
        $wishList = Wishlist::where('product_id', $product_id)->first();

        if ($wishList && ($sessionCheck || Auth::user())) {
            $wishList->update([
                'quantity' => $wishList->quantity + 1,
            ]);
        } else {
            if (Auth::user()) {
                Wishlist::create([
                    'product_id' => $product_id,
                    'user_id' => Auth::id(),
                ]);
            } else {
                $session_id = (Session::has('session_id') ? Session::get('session_id') : Str::random(40));
                Session::put('session_id', $session_id);

                Wishlist::create([
                    'product_id' => $product_id,
                    'session_id' => $session_id,
                ]);
            }

            if ($sessionCheck && !auth()->user()) {
                $wishListCount = Wishlist::where('session_id', Session::get('session_id'))->count();
            } else {
                $wishListCount = Wishlist::where('user_id', auth()->id())->count();

            }

            return $wishListCount;
        }

    }


}
