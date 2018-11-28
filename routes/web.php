<?php

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
    return view('custom.welcome');
});



Route::view('/user-section', 'welcome');
Route::view('/admin-section', 'adminwelcome');

/*auth route*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*admin auth*/
Route::get('admin/home','AdminController@index')->name('admin.home');

Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


/*custom auth*/
Route::get('custom-register', 'CustomAuthController@showRegisterForm');
Route::post('custom-register', 'CustomAuthController@register')->name('custom.register');

Route::get('custom-login', 'CustomAuthController@showLoginForm');
Route::post('custom-login', 'CustomAuthController@login')->name('custom.login');

/*Crud operation Route*/
Route::resource('category', 'CategoryController');
Route::get('listing', 'CategoryController@list')->name('list');
/*Route::get('category/excel', 'CategoryController@excel')->name('excel');*/
Route::get('excel', 'CategoryController@excel')->name('excel');