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

Route::post('subscribe','pagesController@subscribe');

Route::redirect('/hashflare', 'https://hashflare.io/r/88A2C90D');
Route::redirect('/genesismining', 'https://www.genesis-mining.com/a/2330726');
Route::redirect('/cryptominongfarm', 'https://www.cryptominingfarm.io/signup/?referrer=59B6C9A646E8B');