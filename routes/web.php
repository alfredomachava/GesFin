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
Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/logout','AdminController@logout');

Auth::routes();
Route::group(['middleware' => ['auth']], function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/dash','AdminController@dash');
    Route::get('/admin/grafico','AdminController@grafico');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@checkpwd');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatepwd');
	
	Route::get('MTn {{$conta->saldo}}','LacamentoController@dash');
	
	Route::get('/myContas','ContasController@index');	
	Route::resource('contas','ContasController');
	Route::post('conta/store', 'ContasController@store')->name('conta/store');
	Route::put('updateConta/{id}', 'ContasController@update')->name('updateConta');
	Route::delete('deleteConta/{id}', 'ContasController@deleteItem')->name('deleteConta');
	
	Route::resource('metas','MetasController');
	
});

Route::get('/home', 'HomeController@index')->name('home');
