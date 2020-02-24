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

Route::group(['as' => 'images.'], function () {
    Route::get('images/popup', 'ImageController@popup')->name('popup');
    Route::get('images/upload', 'ImageController@upload')->name('upload');
});
Route::get('emoticons/', 'ImageController@emoticons')->name('images.emoticons');
Route::post('emoticons/', 'ImageController@emoticons')->name('images.emoticons');