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

Route::get('/', 'TopicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('topic', 'TopicController', ['only' => ['create', 'store']]);
Route::resource('discussion', 'DiscussionController', ['except' => ['edit', 'update', 'destroy']]);
Route::get('admin', 'AdminController');


