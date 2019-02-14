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

Route::get('/', 'VignetteController@index');

Route::get('/show/{id}', 'VignetteController@show');

Route::get('/admin/user', function () {
    return view('admin.home', ['user' => Auth::user()->name]);
});

Route::group(['prefix' => 'admin'], function(){
  Route::resource('/vignettes', 'AdminController' );
});


Auth::routes();

Route::get('/index', 'HomeController@index')->name('home');
