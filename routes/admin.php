<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'auth'], function() {
    @include 'admin_copy.php';
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::get('/categories/index','CategoryController@index')->name('categories.index');
    Route::get('/categories/create','CategoryController@create')->name('categories.create');
    Route::post('/categories','CategoryController@store')->name('categories.store');

});




