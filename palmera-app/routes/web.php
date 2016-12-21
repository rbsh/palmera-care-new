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
    return view('welcome');
});


Route::get('la-admin/login', function () {
    return view('admin/login');
});


Route::get('la-admin/registration', function () {
    return view('admin/registration');
});


Auth::routes();
Route::group(['prefix' => 'la-admin', 'middleware' => 'auth'], function () {
	Route::get('blank', function () {
	    return view('admin/blank');
});

	//Category Mangement
	Route::resource('category', 'admin\CategoryController');
	Route::post('category/change-status/{id}', 'admin\CategoryController@status');



});


Route::get('/home', 'HomeController@index');
