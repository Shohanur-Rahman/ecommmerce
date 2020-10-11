<?php

use Illuminate\Support\Facades\Route;




Route::get('/execute-payment', 'PaymentController@execute')->name('payments.execute');
Route::post('/create-payment', 'PaymentController@create')->name('payments.create');

Route::group(['middleware'=>'auth'],function(){

	Route::post('/add-to-cart', 'ProductController@add_to_cart')->name('product.add_to_cart');
	Route::get('/view-cart', 'ProductCartController@index')->name('cart.index');
	Route::get('/delete/{cart}', 'ProductCartController@delete')->name('cart.delete');
	Route::patch('/cart', 'ProductCartController@update')->name('cart.update');

    Route::post('/wish-list/carts', 'ProductCartController@wishListCartStore')->name('wish-lists-carts.store');
});


Route::get('/search', 'ProductController@search')->name('product.search');
Route::get('/product/{slug}', 'ProductController@show')->name('product.search.show');
Route::get('/{category}/{slug}', 'ProductController@details')->name('product.details');
Route::get('/{category}', 'ProductController@index')->name('product.index');

Route::get('/cart-list', 'ProductController@getCartList')->name('product.cartlist');






