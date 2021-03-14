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

Route::get('/admin/example', array( 'as'=>'admin.home', function(){

    $url = route('admin.home');

    return 'this url is '.$url;
}));

//Route::resource('/post', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

