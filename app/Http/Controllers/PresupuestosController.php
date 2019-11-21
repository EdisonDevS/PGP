<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\User;
use App\Presupuesto;

class PresupuestosController extends Controller
{
    public function vistaCrearPresupuesto(Request $request)
    {
    	$info_cuentas = User::find($request['user_id'])->cuentas;

    	return view('presupuestos.crear_presupuesto.crear_presupuesto', compact('info_cuentas'));
    }


    public function crearPresupuesto(Request $request)
    {
    	Presupuesto::create([
    		'cuenta_id'=>$request['cuenta_id'],
    		'nombre_presupuesto'=>$request['nombre_presupuesto'],
    		'saldo_presupuesto'=>$request['saldo_presupuesto'],
    		'descripcion'=>$request['descripcion'],
    		'divisa'=>$request['divisa']
    	]);

    	return 'Presupuesto creado con exito';
    }


    public function consultarPresupuestos(Request $request)
    {
    	$presupuestos = User::find($request['user_id'])->presupuestos;

    	return response()->json($presupuestos);
    }
}
