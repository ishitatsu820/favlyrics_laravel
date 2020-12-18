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
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::get('/posts/{id}/show', 'PostsController@show')->name('posts.show');

Route::post('/posts', 'PostsController@create')->name('posts.create');
Route::post('/posts/{id}', 'PostsController@update')->name('posts.update');
Route::post('/posts/{id}/delete', 'PostsController@delete')->name('posts.delete');
