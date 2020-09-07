<?php


Route::group(['prefix' => 'brands'], function () {
	Route::get('/', 'ProductBrandsController@index')->name('brands');
	Route::get('/add', 'ProductBrandsController@add_brand')->name('add_brand');
	Route::post('/add', 'ProductBrandsController@save_brand')->name('save_brand');
	Route::get('/edit/{id}', 'ProductBrandsController@edit_brand')->name('edit_brand');
	Route::post('/edit/{id}', 'ProductBrandsController@update_brand')->name('update_brand');
	Route::get('/delete/{id}', 'ProductBrandsController@delet_brand')->name('delet_brand');
});