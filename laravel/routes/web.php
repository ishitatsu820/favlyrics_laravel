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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/top', 'PostsController@index')->name('posts.index');
Route::get('/posts/new', 'PostsController@new')->name('posts.new');

Route::post('/posts', 'PostsController@create')->name('posts.create');
