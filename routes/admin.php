<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'auth'], function() {
    @include 'admin_copy.php';
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
});




