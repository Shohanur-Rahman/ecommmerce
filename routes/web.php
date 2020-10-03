<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.third.welcome');
})->name('app.home');

/*Route::get('/', function () {
    return view('user.pages.third.welcome');
});*/

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

Route::group(['middleware'=>'auth'],function(){

    Route::group(['prefix'=>'profiles'],function(){
        Route::get('','User\UserProfileController@index')->name('profiles.index');
        Route::get('/edit','User\UserProfileController@edit')->name('profiles.edit');
        Route::patch('/','User\UserProfileController@update')->name('profiles.update');

        Route::get('/change-password','User\UserProfileController@changePasswordEdit')->name('change-password.edit');
        Route::patch('/change-password','User\UserProfileController@changePasswordUpdate')->name('change-password.update');

        Route::patch('/avatar','User\UserProfileController@avatarUpdate')->name('avatar.update');
    });

    Route::group(['prefix'=>'profiles/shipping-address'],function(){
        Route::get('/','User\ShippingAddressController@index')->name('shipping-address.index');
        Route::get('/create','User\ShippingAddressController@create')->name('shipping-address.create');
        Route::post('/','User\ShippingAddressController@store')->name('shipping-address.store');
        Route::get('/{shippingAddress}/edit','User\ShippingAddressController@edit')->name('shipping-address.edit');
        Route::patch('/{shippingAddress}','User\ShippingAddressController@update')->name('shipping-address.update');
    });

    Route::group(['prefix'=>'profiles/apply-vendors'],function(){
        Route::post('/verify-email','User\ApplyVendorController@verifyEmail')->name('verify-email.store');
        Route::get('/','User\ApplyVendorController@create')->name('apply-vendors.create');
        Route::post('/','User\ApplyVendorController@store')->name('apply-vendors.store');
    });

    Route::group(['prefix'=>'profiles/apply-vendors'],function(){
        Route::post('/product-reviews/{id}','User\ProductReviewController@productReviews')->name('product-reviews.store');
     });

    Route::group(['prefix'=>'checkouts'], function(){

        Route::get('/','User\CheckoutController@index')->name('checkouts.index');

        /*Route::get('/','User\CheckoutController@index')->name('checkouts.index');*/
        Route::get('/','User\CheckoutController@create')->name('checkouts.create');

        Route::post('/','User\CheckoutController@store')->name('checkouts.store');
        Route::get('/new-shipping-address','User\CheckoutController@shippingAddressCreate')->name('new-shipping-address.create');
        Route::post('/new-shipping-address','User\CheckoutController@shippingAddressStore')->name('new-shipping-address.store');
    });

    Route::group(['prefix'=>'orders'], function(){
        Route::get('/','User\OrderController@index')->name('orders-details.index');
        Route::get('/{id}','User\OrderController@show')->name('orders-details.show');
    });
});
