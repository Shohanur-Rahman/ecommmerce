<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'brands'], function () {
	Route::get('/', 'ProductBrandsController@index')->name('brands');
	Route::get('/add', 'ProductBrandsController@add_brand')->name('add_brand');
});