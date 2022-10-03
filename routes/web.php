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


Route::get('/posts', 'PostController@index');
Route::get('/', 'PostController@index');
Route::get('/posts/show', 'PostController@show');
Route::get('/posts/study', 'PostController@study');
Route::get('/posts/calendar', 'PostController@calendar');
Route::get('/posts/study/timer', 'PostController@timer');