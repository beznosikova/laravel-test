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
Route::group(['prefix' => app()->get('locale')->getLocale()], function() {

    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::group(['middleware' => 'roles:admin'], function () {
            Route::resource('posts', 'PostsController');
            Route::resource('categories', 'CategoriesController');
        });
        Route::get('/event', 'TestController@event');
    });


    // Route::group(['middleware' => 'face_front'], function () {
        Route::get('/', 'PageController@index')->name('face');
        Route::get('/test/{post}', 'PageController@test');
        Route::get('/test', 'TestController@index');
        Route::get('/files', 'TestController@files');
        Route::get('/locale', 'TestController@locale');

        //Route::get('/adm', 'PageController@adm')->name('adm');

        // Route::resource('contacts', 'ContactFormController');
        Route::get('/contacts/create', 'ContactFormController@create');
        Route::post('/contacts/store', 'ContactFormController@store');
        Route::get('/contacts/show/{id}', 'ContactFormController@show');

        Route::get('/{category}', 'PageController@category')
            ->name('category')
            ->where('category', '[a-z0-9]+');
        Route::get('/{category}/{post}', 'PageController@post')->name('post');
    // });
});