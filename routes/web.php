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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','ArticleController@index')->name('article.index');

Route::get('/article/{id}','ArticleController@show')->where('id', '[0-9]+')->name('article.show');


Route::get('/article/create','ArticleController@create')->name('article.create');

Route::post('/article','ArticleController@store')->name('article.store');

Route::get('music', 'MusicController@index')->name('music.index');
Route::get('music/{id}', 'MusicController@show')->where('id', '[0-9]+')->name('music.show');

