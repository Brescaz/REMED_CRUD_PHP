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

/*Route::get('test', function () {
    return view('pages.someText')->with('txt', 'about');
});*/

Route::get('about', function () {
    return view('pages.about')->with('title2', 'About my website');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('blade', function () {
    return view('child');
});

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');


Route::get('news', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');


Route::get('testEloquent', 'TestController@testMethod');
