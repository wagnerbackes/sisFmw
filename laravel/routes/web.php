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

Route::get('teste', function(){
	return 'Olá Mundo';
});

Route::get('testeController', 'testeController@primeiraView');
Route::get('primeiraView', 'testeController@primeiraView');

Route::get('testeController/segundaView/{nome}', 'testeController@show');
Route::get('testeController/terceiraView', 'testeController@terceiraView');

//teste
Route::get('teste', 'testeController@index');
Route::get('teste/create', 'testeController@create');
Route::post('teste', 'testeController@store');
Route::get('teste/{id}', 'testeController@show');
Route::get('teste/{id}/edit', 'testeController@edit');
Route::put('teste/{id}', 'testeController@update');
Route::delete('teste/{id}', 'testeController@destroy');

?>