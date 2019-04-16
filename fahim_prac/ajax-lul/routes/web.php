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

//ajax controller

Route::post ('ajax/insert','AjaxController@insert')->name('ajax.insert');

//end controller

Route::get('/', function () {
    return view('welcome');
});
