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

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);

Auth::routes();

Route::group(['prefix' => 'settings', 'middleware' => 'auth'], function()
{
  Route::get('/', ['uses' => 'Settings\IndexController@index', 'as' => 'settings.index']);
});
