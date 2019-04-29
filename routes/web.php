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

Route::get('/', function () {return view('index');});
Route::post('/autenticar','UserController@autenticar');
Route::get('/admin', function () {return view('admin.index');});
Route::get('/live', function () {return view('live');});
