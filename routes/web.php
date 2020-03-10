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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/file', 'FileController@index')->name('viewfile');
Route::get('/file/form', 'FileController@create')->name('formfile');
Route::post('/file/upload', 'FileController@store')->name('uploadfile');
Route::delete('/file/{id}', 'FileController@destroy')->name('deletefile');
