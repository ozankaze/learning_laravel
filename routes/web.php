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
    return redirect('/about');
});

Route::get('/about', function () {
    return "Hi Hello Word";
});

Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
Route::post('/post/store', ['as' => 'post.store', 'uses' => 'PostController@store']);
Route::get('/post', ['as' => 'post.index', 'uses' => 'PostController@index']);
Route::get('/post/{post}', ['as' => 'post.show', 'uses' => 'PostController@show']);

