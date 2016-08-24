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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DemoController@index');
Route::get('/getListItems', 'DemoController@get');
Route::post('/storeListItems', 'DemoController@store');
Route::post('/deleteItem', 'DemoController@delete');

Route::auth();

// Route::get('/home', 'HomeController@index');
