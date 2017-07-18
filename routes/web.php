<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|post,get,put,delete
*/
Route::get('/','FrontController@index');
Route::get('/contacto','FrontController@contacto');
Route::get('/reviews','FrontController@reviews');


Route::resource('usuario','UsuarioControler');
