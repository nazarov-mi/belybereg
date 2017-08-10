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

Route::get('/',				'PagesController@home'		)->name('home');
Route::get('/prices',		'PagesController@prices'	)->name('prices');
Route::get('/news',			'PagesController@news'		)->name('news');
Route::get('/articles',		'PagesController@articles'	)->name('articles');
Route::get('/article/{id}',	'PagesController@article'	)->name('article');
Route::get('/contacts',		'PagesController@contacts'	)->name('contacts');

Route::post('/review',	'MainController@addReview'	)->name('review');
Route::post('/order',	'MainController@addOrder'	)->name('order');