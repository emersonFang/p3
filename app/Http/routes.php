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

Route::get('/', function () {
    return view('welcome');
});

if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};

Route::get('/lorem-ipsum', 'LoremController@getLorem');
Route::post('/lorem-ipsum', 'LoremController@postLorem');

Route::get('/rand-user', 'RandUserController@getUsers');
Route::post('/rand-user', 'RandUserController@postUsers');

Route::get('/pwd-gen', 'PwdGenController@getPwd');
Route::post('/pwd-gen', 'PwdGenController@postPwd');