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

Route::get('proveedores', function () {
	echo "esta es la seccion de proveedores";
});

Route::group(['prefix' => 'proveedores'], function(){
	Route::get('view/{id}',[
			'uses' => 'ProveedorController@view',
			'as'   =>  'VistaProveedores' 

		]);
});


Route::get('gestion', function () {
return view('gestion');

	//echo "esta es la seccion de gestion";



});

Route::group(['prefix' => 'admin'], function(){

Route::resource('users','UsersController');

});

