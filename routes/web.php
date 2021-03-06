<?php

Route::get('/', 'PostsController@index');
Route::get('/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/post/{post}/comments', 'CommentsController@store');