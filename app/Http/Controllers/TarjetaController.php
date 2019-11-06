<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;
use App\Cuenta;
use App\User;


class TarjetaController extends Controller
{

	public function vistaAgregarTarjeta(Request $request)
	{
		$info_cuentas = User::find($request['user_id'])->cuentas;

        return view('tarjetas.agregar_tarjeta.agregar_tarjeta', compact('info_cuentas'));
	}

    public function vistaModificarTarjeta(Request $request)
    {
        $info_cuentas = User::find($request['user_id'])->cuentas;
        $info_tarjetas = User::find($request['user_id'])->tarjetas;

        return view('tarjetas.modificar_tarjeta.modificar_tarjeta', compact('info_cuentas', 'info_tarjetas'));
    }

    public function crearTarjeta(Request $request)
    {
    	Tarjeta::create([
    		'cuenta_id' => $request['cuenta_id'],
    		'numero_tarjeta' => $request['numero_tarjeta'],
    		'saldo' => $request['saldo'],
    		'saldo_bajo' => $request['saldo_bajo'],
    		'nombre_tarjeta' => $request['nombre_tarjeta'],
    		'divisa' => $request['divisa'],
    		'descripcion' => $request['descripcion'],
    	]);

    	return 'Tarjeta creada';
    }

    public function actualizarTarjeta(Request $request)
    {
        $tarjeta = Tarjeta::find($request['tarjeta_id']);

        $tarjeta->cuenta_id = $request['cuenta_id'];
        $tarjeta->saldo_bajo = $request['saldo_bajo']; 
        $tarjeta->saldo = $request['saldo_actual'];
        $tarjeta->nombre_tarjeta = $request['nombre_tarjeta'];
        $tarjeta->divisa = $request['divisa'];
        $tarjeta->descripcion = $request['descripcion'];

        $tarjeta->save();

        return "Modificada con exito";
    }

    public function idTarjetas(Request $request)
    {
        $info_tarjetas = User::find($request['user_id'])->tarjetas;

        return response()->json($info_tarjetas);        
    }

    public function consultaCuentaTarjeta(Request $request)
    {
        $cuenta = Tarjeta::find($request['tarjeta_id'])->cuenta;

        return response()->json($cuenta);
    }
}
