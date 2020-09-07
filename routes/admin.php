<?php

use Illuminate\Support\Facades\Route;

@include 'admin_copy.php';
 
Route::get('/dashboard','DashboardController@index')->name('dashboard');
