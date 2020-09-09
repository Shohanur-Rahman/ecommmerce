<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'auth'], function() {
    @include 'admin_copy.php';
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::group(['prefix'=>'categories'], function(){
        Route::get('','ProductCategoryController@index')->name('product_categories.index');
        Route::get('/create','ProductCategoryController@create')->name('product_categories.create');
        Route::post('','ProductCategoryController@store')->name('product_categories.store');
        Route::get('/{productCategory}/edit','ProductCategoryController@edit')->name('product_categories.edit');
        Route::patch('/{productCategory}','ProductCategoryController@update')->name('product_categories.update');
        Route::delete('/{productCategory}','ProductCategoryController@destroy')->name('product_categories.destroy');
    });

    Route::group(['prefix'=>'warehouses'], function(){
        Route::get('','WarehouseController@index')->name('warehouses.index');
        Route::get('/create','WarehouseController@create')->name('warehouses.create');
        Route::post('','WarehouseController@store')->name('warehouses.store');
        Route::get('/{warehouse}/edit','WarehouseController@edit')->name('warehouses.edit');
        Route::patch('/{warehouse}','WarehouseController@update')->name('warehouses.update');
        Route::delete('/{warehouse}','WarehouseController@destroy')->name('warehouses.destroy');
    });

    Route::group(['product/availabilities'=>'warehouses'], function(){
        Route::get('','ProductAvailabilityController@index')->name('product_availabilities.index');
        Route::get('/create','ProductAvailabilityController@create')->name('product_availabilities.create');
        Route::post('','ProductAvailabilityController@store')->name('product_availabilities.store');
        Route::get('/{productAvailability}/edit','ProductAvailabilityController@edit')->name('product_availabilities.edit');
        Route::patch('/{productAvailability}','ProductAvailabilityController@update')->name('product_availabilities.update');
        Route::delete('/{productAvailability}','ProductAvailabilityController@destroy')->name('product_availabilities.destroy');
    });
});





