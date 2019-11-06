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

Route::get('/tarjetas', function() {
	return view('tarjetas.tarjetas');
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

Route::get('/modificar_cuenta', 'CuentaController@vistaModificarCuenta');

Route::get('/agregar_transaccion', 'TransaccionController@vistaAgregarTransaccion');

Route::get('/transaccion_programada', function() {
	return view('transacciones.transaccion_programada.transaccion_programada');
});

Route::get('/modificar_transaccion', function() {
	return view('transacciones.modificar_transaccion.modificar_transaccion');
});

Route::get('/crear_cheque', function() {
	return view('chequera.crear_cheque.crear_cheque');
});

Route::get('/presupuestos', function() {
	return view('presupuestos.presupuestos');
});

Route::post('/crear_cuenta', 'CuentaController@crearCuenta');

Route::post('/consultar_cuentas', 'CuentaController@idCuentas');

Route::post('/actualizar_cuenta', 'CuentaController@actualizarCuenta');

Route::post('/consultar_tarjetas', 'TarjetaController@idTarjetas');

Route::post('/actualizar_tarjeta', 'TarjetaController@actualizarTarjeta');

Route::get('/agregar_tarjeta', 'TarjetaController@vistaAgregarTarjeta');

Route::get('/modificar_tarjeta', 'TarjetaController@vistaModificarTarjeta');

Route::post('/crear_tarjeta', 'TarjetaController@crearTarjeta');

Route::post('/consultar_cuenta_tarjeta', 'TarjetaController@consultaCuentaTarjeta');

Route::get('/test', 'TestController@test');

Route::post('/crear_transaccion', 'TransaccionController@crearTransaccion');

Route::post('/modificar_transaccion', 'TransaccionController@actualizarTransaccion');

Route::post('/consultar_cuenta_numero', 'CuentaController@consultarPorNumero');

Route::post('/consultar_transacciones', 'TransaccionController@consultaTransacciones');