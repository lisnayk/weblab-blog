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

Route::get('/', "ArticleController@publicIndex");

//Route::get('/test', "Controller@index")
//    ->middleware(["auth"]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('articles', 'ArticleController')->middleware("auth");

Route::resource('users', 'UserController')->middleware("auth");

Route::resource('categories', 'CategoryController')->middleware("auth");

Route::resource('statuses', 'StatusController')->middleware("auth");

Route::resource('tags', 'TagController');
