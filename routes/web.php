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

Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'StudyController@mypage');
Route::get('/posts/ranking', 'StudyController@ranking');
Route::get('/posts/studystart', 'StudyController@studystart');
Route::get('/posts/calendar', 'StudyController@calendar');
Route::get('/posts/studystart/timer', 'StudyController@timer');
});

/*Route::get('/', 'LayoutController@mypage');
Route::get('/layout', 'LayoutController@mypage');
Route::get('/star/sun', 'LayoutController@sun');
Route::get('/star/moon', 'LayoutController@moon');
*/
Auth::routes();


