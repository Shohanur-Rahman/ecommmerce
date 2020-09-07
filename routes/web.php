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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test_page')->name('test_page');
<<<<<<< HEAD

//user Controller
Route::get('/login','UserController@login')->name('login');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@store')->name('register.store');
=======
Route::get('/user-ui', 'TestController@user_ui')->name('user_ui');
>>>>>>> d07bcd6c0aca89dbe044baceb91678c66c5a29f8
