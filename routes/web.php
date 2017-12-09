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

Route::get('/login', function () {
    return view('layouts.login');
});


Route::get('/', function () {
    return view('layouts.master');
});

Route::group(array('prefix' => 'api'), function()
{
    Route::group(array('prefix' => 'v1'), function()
    {
        Route::resource('users', 'UserController');
    });
});
Route::post('authenticate', 'AuthenticateController@authenticate');