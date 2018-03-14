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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::post('addtask', 'AddingController@addtask');
    Route::post('updatetask', 'AddingController@updatetask');
    Route::post('ajax/getformtask', 'AddingController@getformtask');

    Route::post('addcomment', 'AddingController@addcomment');
    Route::post('ajax/getformcom', 'AddingController@getformcom');
});

