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


Route::get('/', '/app/Http/Controllers/HomeController@index');

Route::get('/admin/example', array( 'as'=>'admin.home', function(){

    $url = route('admin.home');

    return 'this url is '.$url;
}));

Route::get('/contact', '/app/Http/Controllers/PostsController@contact');

Route::get('/post/{id}/{name}/{password}', '/app/Http/Controllers/PostsController@show_post');
