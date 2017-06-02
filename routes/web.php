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

//chama o metodo index de HomeController
//Route::get('/home', 'HomeController@index');
Route::get('/home',['as' =>'home','uses' =>'HomeController@index']);

//Route::get('/perfilXerox', 'HomeController@perfilXerox');

Route::get('minhasImpressoes', 'HomeController@minhasImpressoes')->middleware('auth');

Route::get('meusServisos', 'HomeController@meusServisos')->middleware('auth');

Route::get('criarServico', 'HomeController@criarServico')->middleware('auth');

Route::get('perfilXerox/{id}', 'HomeController@perfilXerox')->middleware('auth');

Route::post('postArquivo', 'HomeController@postArquivo')->middleware('auth');

Route::post('criarXerox', 'HomeController@criarXerox')->middleware('auth');



//Route::get('/cadastrar', 'XeroxController@cadastrar');

