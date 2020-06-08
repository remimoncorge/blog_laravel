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



Route::get('/', 'HomeController@index');

Route::get('/welcome', 'HomeController@index');

Route::get('/articles', 'ArticlesController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/articles/{post_name}', 'ArticlesController@show');

Route::post('/contact', 'ContactController@store');

Route::post('/articles', 'ArticlesController@store_comment');

Route::get('/connexion', 'ConnexionController@index');

Route::post('/connexion', 'ConnexionController@connexion');


Route::get('/admin', 'AdminController@index');

Route::get('/admin/edit', 'AdminController@edit');

Route::post('/admin/edit', 'AdminController@update');

Route::get('/admin/delete', 'AdminController@delete');

Route::get('/admin/create', 'AdminController@create');

Route::post('/admin/create', 'AdminController@store');








