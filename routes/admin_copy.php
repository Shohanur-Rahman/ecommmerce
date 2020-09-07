<?php


Route::group(['prefix' => 'brands'], function () {
	Route::get('/', 'ProductBrandsController@index')->name('brands');
	Route::get('/add', 'ProductBrandsController@add_brand')->name('add_brand');
});