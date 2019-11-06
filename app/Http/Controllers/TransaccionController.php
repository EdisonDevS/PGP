<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;
use App\User;
use App\Transaccion;

class TransaccionController extends Controller
{
    public function vistaAgregarTransaccion(Request $request)
    {
    	$info_tarjetas = User::find($request['user_id'])->tarjetas;

    	return view('transacciones.agregar_transaccion.agregar_transaccion', compact('info_tarjetas'));
    }

    public function crearTransaccion(Request $request)
    {
    	Transaccion::create([
    		'tarjeta_id' => $request['tarjeta_id'], 
    		'valor' => $request['valor'],
    		'descripcion' => $request['descripcion'],
            'cuenta_destino_id' => $request['cuenta_destino_id'],
    	]);

    	return "Transacción creada";
    }

    public function actualizarTransaccion(Request $request)
    {
        $transaccion = Transaccion::find($request['transaccion_id']);

        $transaccion->tarjeta_id = $request['tarjeta_id']; 
        $transaccion->valor = $request['valor'];
        $transaccion->descripcion = $request['descripcion']; 
        $transaccion->cuenta_destino_id = $request['cuenta_destino_id'];
        
        $transaccion->save();

        return "Modificada con exito";
    }

    public function consultaTransacciones(Request $request)
    {
        $transacciones = User::find($request['user_id'])->transacciones;

        return $transacciones;
    }
}
