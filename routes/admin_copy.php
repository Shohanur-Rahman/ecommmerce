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
	Route::get('/delete/{id}', 'ProductTagController@delet_tag')->name('delet_tag');
});