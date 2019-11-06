<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\User;

class CuentaController extends Controller
{
    public function crearCuenta(Request $request)
    {
    	Cuenta::create([
    		'saldo_bajo' => $request['saldo_bajo'], 
    		'user_id' => $request['user_id'],
    		'saldo' => $request['saldo_inicial'],
            'numero_cuenta' => $request['numero_cuenta'],
    		'nombre_cuenta' => $request['nombre_cuenta'], 
    		'tipo_cuenta' => $request['tipo_cuenta'], 
    		'divisa' => $request['divisa'], 
    		'descripcion' => $request['descripcion'],
    	]);

    	return "Cuenta creada";
    }

    public function vistaModificarCuenta(Request $request)
    {
        $info_cuentas = User::find($request['user_id'])->cuentas;

        return view('cuentas.modificar_cuenta.modificar_cuenta', compact('info_cuentas'));
    }

    public function idCuentas(Request $request)
    {
        $info_cuentas = User::find($request['user_id'])->cuentas;

        return response()->json($info_cuentas);
    }

    public function actualizarCuenta(Request $request)
    {
        $cuenta = Cuenta::find($request['cuenta_id']);

        $cuenta->saldo_bajo = $request['saldo_bajo']; 
        $cuenta->saldo = $request['saldo_actual'];
        $cuenta->nombre_cuenta = $request['nombre_cuenta']; 
        $cuenta->tipo_cuenta = $request['tipo_cuenta'];
        $cuenta->divisa = $request['divisa'];
        $cuenta->descripcion = $request['descripcion'];

        $cuenta->save();

        return "Modificada con exito";
    }

    public function consultarPorNumero(Request $request)
    {


        $cuenta = Cuenta::where('numero_cuenta', $request['cuenta_destino'])->get();

        if(count($cuenta) > 0)
        {
            $usuario = $cuenta[0]->user;
            return response()->json($usuario);    
        }
        else
            return response()->json();
        

        
    }
}
