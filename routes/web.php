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

Route::get('/novo', 'ClienteControlador@create');  // 1)

Route::get('/', 'ClienteControlador@index');   // 2)

Route::post('/cliente', 'ClienteControlador@store'); //2)




