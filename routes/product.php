<?php

use Illuminate\Support\Facades\Route;


Route::get('/{category}/{slug}', 'ProductController@details')->name('product.details');
Route::get('/{category}', 'ProductController@index')->name('product.index');
Route::get('/search', 'ProductController@search')->name('product.search');
