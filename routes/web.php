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
Route::get('/', 'WebApp@welcome');
Route::get('/myarea', 'WebApp@myarea');
Route::get('/person', 'WebApp@lost');
Route::get('/organiz', 'WebApp@organiz');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');
Route::get('/messageDelete/{id}', 'ChatsController@deleteMessage');

Route::get('/home', 'HomeController@index')->name('home');
