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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'myController@home');

Route::get('SteveJobs', 'myController@SteveJobs');
Route::get('Biography', 'myController@Biography');
Route::get('Pictures', 'myController@Pictures');
