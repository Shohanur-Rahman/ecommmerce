<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test_page')->name('test_page');

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@show')->name('show');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@store')->name('register.store');

Route::get('/forget-password','UserController@forgetPasswordIndex')->name('forget-password.index');
Route::post('/forget-password','UserController@forgetPasswordStore')->name('forget-password.store');

//password recovery code
Route::group(['middleware' => 'recovery_code'], function() {
    Route::get('/password-recovery', 'UserController@passwordRecoveryIndex')->name('password.recovery.index');
    Route::post('/password-recovery', 'UserController@passwordRecovery')->name('password.recovery');

    Route::get('/password-update', 'UserController@passwordUpdateGet')->name('password.update');
    Route::post('/password-update', 'UserController@passwordUpdateStore')->name('password.update.store');
});

Route::get('/user-ui', 'TestController@user_ui')->name('user_ui');

Route::get('profiles','User\UserProfileController@index')->name('profiles.index');
Route::get('profiles/edit','User\UserProfileController@edit')->name('profiles.edit');
Route::patch('profiles/','User\UserProfileController@update')->name('profiles.update');

Route::get('profiles/change-password','User\UserProfileController@changePasswordEdit')->name('change-password.edit');
Route::patch('profiles/change-password','User\UserProfileController@changePasswordUpdate')->name('change-password.update');

Route::get('profiles/shipping-address','User\ShippingAddressController@create')->name('shipping-address.create');
Route::post('profiles/shipping-address','User\ShippingAddressController@store')->name('shipping-address.store');
Route::get('profiles/shipping-address/{shippingAddress}/edit','User\ShippingAddressController@edit')->name('shipping-address.edit');
Route::patch('profiles/{shippingAddress}/shipping-address','User\ShippingAddressController@update')->name('shipping-address.update');
