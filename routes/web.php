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

Route::get('/', 'PageController@index');
Route::get('/{category}', 'PageController@category');
Route::get('/{category}/{post}', 'PageController@post');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
});


