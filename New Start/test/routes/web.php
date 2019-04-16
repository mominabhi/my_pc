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

route::get('/form','formController@index')->name('show.form');
route::post ('/upload','formController@upload')->name('upload.form');
route::get('image/show','formController@image_show')->name('show.image');
Route::get('form/play','formController@showForm')->name('show.form');
Route::post('form/submit','formController@form_submit')->name('form.submit');
Route::get('form/datatable','formController@datatable')->name('datatable');

Route::group(['prefix'=>'forms', 'as'=>'form.'],function (){
    Route::get('edit/{id}',['as'=>'edit','uses'=>'formController@edit']);
    Route::post('update',['as'=>'update','uses'=>'formController@update']);
    Route::get('delete/{id}',['as'=>'delete', 'uses'=>'formController@delete']);
});
Route::get('login','LoginController@showLogin')->name('show.login');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');
