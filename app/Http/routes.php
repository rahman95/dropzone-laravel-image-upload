<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);

/**
 * Part 2 - Display already uploaded images in Dropzone
 */
Route::get('example-2', ['as' => 'upload-2', 'uses' => 'ImageController@getServerImagesPage']);
Route::get('server-images', ['as' => 'server-images', 'uses' => 'ImageController@getServerImages']);

/**
 * Part 3 - On Submit process Queue
 */
Route::get('example-3', ['as' => 'upload-3', 'uses' => 'ImageController@getUpload3']);
Route::post('upload3', ['as' => 'upload-post3', 'uses' =>'ImageController@postUpload3']);

/**
 * Part 4 - Submit Form with other fields and upload same time.
 */
Route::get('example-4', ['as' => 'upload-4', 'uses' => 'ImageController@getUpload4']);
Route::post('upload4', ['as' => 'upload-post4', 'uses' =>'ImageController@postUpload4']);
