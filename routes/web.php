<?php

Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show')->where('id', '[0-9]+');
Route::get('/goods', 'GoodsController@index');
Route::get('/goods/{id}', 'GoodsController@show')->where('id', '[0-9]+');