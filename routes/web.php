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

Route::get('/home', ['as'=> 'home','uses'=>'HomeController@index']);


Route::get('auth/facebook',['as' => 'auth/facebook', 'uses' => 'Auth\LoginController@redirectToProvider' ]);
Route::get('auth/facebook/callback',['as' => 'auth/facebook/callback', 
	'uses' => 'Auth\LoginController@handleProviderCallback' ]);