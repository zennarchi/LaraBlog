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

Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'HomeController@show')->name('post.show');

Route::get('/tag/{id}', 'HomeController@tag')->name('tag.show');

Route::get('/category/{id}', 'HomeController@category')->name('category.show');


Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){

    Route::get('/', 'DashboardController@index');

    Route::resource('/categories', 'CategoriesController');

    Route::resource('/tags', 'TagsController');

    Route::resource('/users', 'UsersController');

    Route::resource('/posts', 'PostsController');

});


