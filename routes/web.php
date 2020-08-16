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


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();


// Admin middleware

Route::group(['middleware' => ['auth', 'verify.admin']], function(){
	 Route::prefix('admin')->group(function () {
	 	Route::get('dashboard', 'admin\HomeController@index');
	});
});

// User middleware

Route::group(['middleware' => ['auth', 'verify.user']], function(){
	 Route::prefix('user')->group(function () {
			Route::get('product-create','User\ProductsController@create')->name('productCreate');
			Route::post('product-create','User\ProductsController@store')->name('productStore');
		});
});









