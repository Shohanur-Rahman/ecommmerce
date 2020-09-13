<?php

use Illuminate\Support\Facades\Route;


Route::get('/{category}/{slug}', 'ProductController@details')->name('product.details');
