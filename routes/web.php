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
    return view('jumbotron');
});

//Dashboard Routing
Route::get('warta', ['as'=>'warta', 'uses'=>'HomeController@warta']);
Route::get('agenda', ['as'=>'agenda', 'uses'=>'HomeController@agenda']);
Route::get('artikel', ['as'=>'artikel', 'uses'=>'HomeController@artikel']);


//Admin Routing
Route::get('admin', ['as'=>'admin', 'uses'=>'AdminController@homepage']);