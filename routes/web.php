<?php

Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show')->where('id', '[0-9]+');
Route::get('/goods', 'GoodsController@index');
Route::get('/goods/{id}', 'GoodsController@show')->where('id', '[0-9]+');

Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
// Route::get('users/{id}', function(App\User $user) {
//     dd($user);
// });

// Route::get('users/{user}', function (App\User $user) {
//     return $user->email;
// });

?>