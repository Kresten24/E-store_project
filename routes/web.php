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

Route::get('/home', 'pagesController@home');
Route::get('/contact', 'pagesController@contact');
Route::get('/about-us', 'pagesController@about');
Route::get('/locations', 'pagesController@locations');
Route::get('auth/register', 'RegisterController@register');
Route::post('auth/register', 'RegisterController@store');
Route::get('auth/login', 'pagesController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
