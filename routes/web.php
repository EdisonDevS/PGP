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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cuentas', function() {
	return view('cuentas.cuentas');
});

Route::get('/transacciones', function() {
	return view('transacciones.transacciones');
});

Route::get('/smart_progress', function() {
	return view('smart_progress.smart_progress');
});

Route::get('/chequera', function() {
	return view('chequera.chequera');
});

Route::get('/agregar_cuenta', function() {
	return view('cuentas.agregar_cuenta.agregar_cuenta');
});

Route::get('/modificar_cuenta', function() {
	return view('cuentas.modificar_cuenta.modificar_cuenta');
});

Route::get('/modificar_cuenta', function() {
	return view('cuentas.modificar_cuenta.modificar_cuenta');
});

Route::get('/agregar_transaccion', function() {
	return view('transacciones.agregar_transaccion.agregar_transaccion');
});