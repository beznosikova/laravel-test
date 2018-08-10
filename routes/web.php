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

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'roles:admin'], function () {
        Route::resource('posts', 'PostsController');
        Route::resource('categories', 'CategoriesController');
    });
    Route::get('/event', 'TestController@event');
});

Route::get('/', 'PageController@index');
Route::get('/test/{post}', 'PageController@test');
Route::get('/test', 'TestController@index');
Route::get('/files', 'TestController@files');

//Route::get('/adm', 'PageController@adm')->name('adm');

Route::get('/{category}', 'PageController@category')
    ->name('category')
    ->where('category', '[a-z0-9]+')
;
Route::get('/{category}/{post}', 'PageController@post')->name('post');
