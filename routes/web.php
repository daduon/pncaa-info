<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Admin Routes
Route::group(['namespace' => 'Admins'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	Route::get('admin/about','AboutController@index')->name('admin.about');
	Route::get('admin/about-update','AboutController@index')->name('admin.about.update');
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login_account');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');