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



Route::get('/','pagesController@home');
Route::get('/badlist','pagesController@badlist');

Route::get('/contact','pagesController@showcontact');
Route::post('/contact','pagesController@savecontact');