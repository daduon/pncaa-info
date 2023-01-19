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

// Route::get('/', 'HomeController@index')->name('home');

//Admin Routes
Route::group(['namespace' => 'Admins'],function(){

	Route::get('admin/home','HomeController@index')->name('admin.home');
	Route::get('admin/form-home/{id}','HomeController@formHome')->name('admin.form_home');
	Route::get('admin/form-contact/{id}','HomeController@formContact')->name('admin.form_contact');
	Route::get('admin/form-about/{id}','HomeController@formAbout')->name('admin.form_about');

	Route::post('admin/update-home/{id}','HomeController@updateHome')->name('admin.update_home');
	Route::post('admin/update-about/{id}','AboutController@updateAbout')->name('admin.update_about');
	Route::post('admin/update-contact/{id}','ContactController@updateContact')->name('admin.update_contact');

	// Authentication
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login_account');
	Route::post('admin-logout', 'Auth\LoginController@perform')->name('admin.logout.perform');
});


Auth::routes();

