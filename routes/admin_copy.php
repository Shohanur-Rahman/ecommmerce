<?php


Route::group(['prefix' => 'brands'], function () {
	Route::get('/', 'ProductBrandsController@index')->name('brands.index');
	Route::get('/create', 'ProductBrandsController@create')->name('brands.create');
	Route::post('/', 'ProductBrandsController@store')->name('brands.store');
	Route::get('/{id}/edit', 'ProductBrandsController@edit')->name('brands.edit');
	Route::patch('/{id}', 'ProductBrandsController@update')->name('brands.update');
	Route::delete('/{brand}', 'ProductBrandsController@destroy')->name('brands.destroy');
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', 'ProductTagController@index')->name('tags.index');
    Route::get('/create', 'ProductTagController@create')->name('tags.create');
    Route::post('/', 'ProductTagController@store')->name('tags.store');
    Route::get('/{id}/edit', 'ProductTagController@edit')->name('tags.edit');
    Route::patch('/{id}', 'ProductTagController@update')->name('tags.update');
    Route::delete('/{id}', 'ProductTagController@destroy')->name('tags.destroy');
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductsController@index')->name('products.index');
    Route::get('/create', 'ProductsController@create')->name('products.create');
    Route::post('/', 'ProductsController@store')->name('products.store');
    Route::get('/{id}/edit', 'ProductsController@edit')->name('products.edit');
    Route::get('/{id}/copy', 'ProductsController@copy')->name('products.copy');
    Route::patch('/{id}/edit', 'ProductsController@update')->name('products.update');
});


