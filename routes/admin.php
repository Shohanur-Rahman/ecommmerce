<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'auth'], function() {
    @include 'admin_copy.php';
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::group(['prefix'=>'categories'], function(){
        Route::get('','ProductCategoryController@index')->name('product-categories.index');
        Route::get('/create','ProductCategoryController@create')->name('product-categories.create');
        Route::post('','ProductCategoryController@store')->name('product-categories.store');
        Route::get('/{productCategory}/edit','ProductCategoryController@edit')->name('product-categories.edit');
        Route::patch('/{productCategory}','ProductCategoryController@update')->name('product-categories.update');
        Route::delete('/{productCategory}','ProductCategoryController@destroy')->name('product-categories.destroy');
    });

    Route::group(['prefix'=>'warehouses'], function(){
        Route::get('','WarehouseController@index')->name('warehouses.index');
        Route::get('/create','WarehouseController@create')->name('warehouses.create');
        Route::post('','WarehouseController@store')->name('warehouses.store');
        Route::get('/{warehouse}/edit','WarehouseController@edit')->name('warehouses.edit');
        Route::patch('/{warehouse}','WarehouseController@update')->name('warehouses.update');
        Route::delete('/{warehouse}','WarehouseController@destroy')->name('warehouses.destroy');
    });

    Route::group(['prefix'=>'product-availabilities'], function(){
        Route::get('','ProductAvailabilityController@index')->name('product-availabilities.index');
        Route::get('/create','ProductAvailabilityController@create')->name('product-availabilities.create');
        Route::post('','ProductAvailabilityController@store')->name('product-availabilities.store');
        Route::get('/{productAvailability}/edit','ProductAvailabilityController@edit')->name('product-availabilities.edit');
        Route::patch('/{productAvailability}','ProductAvailabilityController@update')->name('product-availabilities.update');
        Route::delete('/{productAvailability}','ProductAvailabilityController@destroy')->name('product-availabilities.destroy');
    });

    Route::group(['prefix'=>'main-sliders'], function(){
        Route::get('','MainSliderController@index')->name('main-sliders.index');
        Route::get('/create','MainSliderController@create')->name('main-sliders.create');
        Route::post('','MainSliderController@store')->name('main-sliders.store');
        Route::get('/{mainSlider}/edit','MainSliderController@edit')->name('main-sliders.edit');
        Route::patch('/{mainSlider}','MainSliderController@update')->name('main-sliders.update');
        Route::delete('/{mainSlider}','MainSliderController@destroy')->name('main-sliders.destroy');
    });

     Route::group(['prefix'=>'users'], function(){
            Route::get('{type}','UserController@index')->name('users.index');
//            Route::get('/create','MainSliderController@create')->name('main-sliders.create');
//            Route::post('','MainSliderController@store')->name('main-sliders.store');
            Route::get('{type}/{user}/edit','UserController@edit')->name('users.edit');
            Route::patch('/{type}/{user}','UserController@update')->name('users.update');
//            Route::delete('/{mainSlider}','MainSliderController@destroy')->name('main-sliders.destroy');
     });

    Route::group(['prefix'=>'product-sizes'], function(){
        Route::get('','ProductSizeController@index')->name('product-sizes.index');
        Route::get('/create','ProductSizeController@create')->name('product-sizes.create');
        Route::post('','ProductSizeController@store')->name('product-sizes.store');
        Route::get('/{ProductSize}/edit','ProductSizeController@edit')->name('product-sizes.edit');
        Route::patch('/{ProductSize}','ProductSizeController@update')->name('product-sizes.update');
        Route::delete('/{ProductSize}','ProductSizeController@destroy')->name('product-sizes.destroy');
    });

    Route::group(['prefix'=>'product-colors'], function(){
        Route::get('','ProductColorController@index')->name('product-colors.index');
        Route::get('/create','ProductColorController@create')->name('product-colors.create');
        Route::post('','ProductColorController@store')->name('product-colors.store');
        Route::get('/{ProductColor}/edit','ProductColorController@edit')->name('product-colors.edit');
        Route::patch('/{ProductColor}','ProductColorController@update')->name('product-colors.update');
        Route::delete('/{ProductColor}','ProductColorController@destroy')->name('product-colors.destroy');
    });
});





