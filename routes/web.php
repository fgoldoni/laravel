<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('salut',function(){
    return "Salut les gens";
});


Auth::routes();

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

Route::get('/home', 'HomeController@index');


Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'], function(){
    Route::resource('posts' , 'PostsController',['only' => ['index', 'show']]);
});

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'], function(){
    Route::resource('pages' , 'PagesController');
    Route::get('pages/dashboard' , 'PagesController@dashboard');
});

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'], function(){
    Route::get('products' , 'ProductsController@index');
    Route::get('products/edit' , 'ProductsController@edit');
    Route::get('products/create' , 'ProductsController@create');
});


