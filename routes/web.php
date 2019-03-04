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
    return view('posts.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/posts', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/posts', 'HomeController@createPost')->name('post.form');
Route::get('/author/posts/detail/{id}', 'HomeController@getPost')->name('post.detail');