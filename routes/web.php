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

Route::get('/', 'PagesController@getIndex');
Route::get('/about-us', 'PagesController@getAbout');
Route::get('/contact-us', 'PagesController@getContact');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/admin-messages', 'MessagesController@getMessages');
