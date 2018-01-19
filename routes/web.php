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

Route::get('/', function () {
    return view('welcome');
});

route::get('auth/login', 'Auth\Controller@getLogin');
route::post('auth/login', 'Auth\Controller@postLogin');
route::get('auth/logout', 'Auth\Controller@getLogout');


route::get('auth/logout', 'Auth\Controller@getRegister');
route::get('auth/logout', 'Auth\Controller@postRegister');


Route::get('/pievienot', 'PagesController@getpievienot');
Route::get('/receptes', 'PagesController@getreceptes');
Route::get('/aboutfile', 'PagesController@getaboutfile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');


/* šie nav īsti vajadzīgi --> */
Route::get('/main', 'PagesController@getmain');
Route::get('/about', 'PagesController@getabout');
Route::get('/pievienotrecepti', 'PagesController@getpievienotrecepti');
