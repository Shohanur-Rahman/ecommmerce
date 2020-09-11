<?php


Route::group(['prefix' => 'brands'], function () {
	Route::get('/', 'ProductBrandsController@index')->name('brands');
	Route::get('/add', 'ProductBrandsController@add_brand')->name('add_brand');
	Route::post('/add', 'ProductBrandsController@save_brand')->name('save_brand');
	Route::get('/edit/{id}', 'ProductBrandsController@edit_brand')->name('edit_brand');
	Route::post('/edit/{id}', 'ProductBrandsController@update_brand')->name('update_brand');
	Route::get('/delete/{id}', 'ProductBrandsController@delet_brand')->name('delet_brand');
});


Route::group(['prefix' => 'tags'], function () {
	Route::get('/', 'ProductTagController@index')->name('tags');
	Route::get('/add', 'ProductTagController@add_tag')->name('add_tag');
	Route::post('/add', 'ProductTagController@save_tag')->name('save_tag');
	Route::get('/edit/{id}', 'ProductTagController@edit_tag')->name('edit_tag');
	Route::post('/edit/{id}', 'ProductTagController@update_tag')->name('update_tag');
	Route::get('/delete/{id}', 'ProductTagController@delete_tag')->name('delete_tag');
}); 

Route::group(['prefix' => 'products'], function () {
	Route::get('/', 'ProductsController@index')->name('products');
	Route::get('/add', 'ProductsController@add_product')->name('add_product');
	Route::post('/add', 'ProductsController@save_product')->name('save_product');
	Route::get('/edit/{id}', 'ProductsController@edit_product')->name('edit_product');
	Route::post('/edit/{id}', 'ProductsController@update_product')->name('update_product');
});