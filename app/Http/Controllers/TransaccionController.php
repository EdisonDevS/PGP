<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;
use App\User;
use App\Transaccion;
use App\Cuenta;

class TransaccionController extends Controller
{
    public function vistaAgregarTransaccion(Request $request)
    {
    	$info_tarjetas = User::find($request['user_id'])->tarjetas;

    	return view('transacciones.agregar_transaccion.agregar_transaccion', compact('info_tarjetas'));
    }

    public function vistaModificarTransaccion(Request $request)
    {
        $transaccion = Transaccion::find($request['transaccion_id']);

        $transaccion->descripcion = $request['descripcion'];

        $cuenta->save();

        return "Modificada con exito";
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
        $transacciones = User::find($request['user_id'])->transacciones()->where('transaccion_activa', true)->get();

        return $transacciones;
    }


    public function borrarTransacciones(Request $request)
    {
        

        $tarjeta = Tarjeta::find($request['tarjeta_id']);
        $cuenta = Cuenta::find($tarjeta->cuenta_id);
        $user_id = $cuenta->user_id;

        $transaccion = Transaccion::find($request['id']);
        $transaccion->transaccion_activa = false;
        $transaccion->save();

        $transacciones = User::find($user_id)->transacciones()->where('transaccion_activa', true)->get();

        return response()->json($transacciones);
    }
}
