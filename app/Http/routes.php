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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');



//ruta de contrato
Route::get('contrato', 'ContratoController@index');
Route::get('ubicacion', 'UbicacionController@index');
Route::get('modalidad', 'ModalidadController@index');
Route::get('pago', 'PagoController@index');
Route::get('alta', 'ElementosController@index');


//slug para derigir cualquier petiicion a donde sea
Route::get('/{slug?}', 'HomeController@index');

//mail
Route::resource('mail','MailController');
//controladores de login
Route::controllers([
	
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/operativo/recurso', function () {
    return view('elementos.recursos');
});
Route::get('/operativo/baja', function () {
    return view('elementos.baja');
});

Route::get('/operativo/operativo', function () {
    return view('operativo.operativo');
});

//nuevas platillas
Route::get('/recursos/alta', function () {
    return view('elementos.alta');
});
Route::get('/recursos/baja', function () {
    return view('bajas.baja');
});
Route::get('/operativo/vista', function () {
    return view('operativo.operativo');
});


