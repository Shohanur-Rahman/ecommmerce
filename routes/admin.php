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
});




