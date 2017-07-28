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

Route::get('/', 'PagesController@index');

/*Route::get('test', function () {
    return view('pages.someText')->with('txt', 'about');
});*/
/*
Route::get('about', function () {
    return view('pages.about')->with('title2', 'About my website');
});

*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('blade', function () {
    return view('child');
});

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');


Route::get('news', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');


Route::get('testEloquent', 'TestController@testMethod');
*/
/* --------- projet ---------------- --------------------------------------------------*/

Route::get('projets', ['uses' => 'ProjetsController@index']);

Route::get('projets/create', ['uses' => 'ProjetsController@create']);
Route::post('projets', ['uses' => 'ProjetsController@store']);

/* --------- projet user ---------------- --------------------------------------------------*/

Route::get('user_projets', ['uses' => 'UsersProjetsController@index']);

Route::get('user_projets/create', ['uses' => 'UsersProjetsController@create']);
Route::post('user_projets', ['uses' => 'UsersProjetsController@store']);


/* --------- users --------------------------------------------------------------------- */

Route::get('users', ['uses' => 'UsersController@index']);

Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);

/*Route::get('projets', function() {

	return $projets;

});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
