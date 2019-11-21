<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cheque;
use App\User;
use App\Cuenta;

class ChequesController extends Controller
{

	public function vistaCrearCheques(Request $request)
	{
		$info_cuentas = User::find($request['user_id'])->cuentas;

		return view('chequera.crear_cheque.crear_cheque', compact('info_cuentas'));
	}


	public function consultarCheques(Request $request){
		$cheques = User::find($request['user_id'])->cheques()->where('cheque_activo', true)->get();

		return response()->json($cheques);
	}


    public function crearCheque(Request $request)
    {
    	Cheque::create([
    		'cuenta_id'=>$request['cuenta_id'],
    		'numero_cheque'=>$request['numero_cheque'],
    		'valor'=>$request['valor'],
    		'descripcion'=>$request['descripcion'],
    		'nombre_destinatario'=>$request['nombre_destinatario'],
    		'documento_destinatario'=>$request['documento_destinatario'],
    		'fecha_de_expendio'=>$request['fecha_de_expendio'],
    		'nombre_destinatario'=>$request['nombre_destinatario'],
    	]);

    	return 'Cheque creado';
    }

    public function borrarCheques(Request $request)
    {
        

        $cuenta = Cuenta::find($request['cuenta_id']);
        $user_id = $cuenta->user_id;

        $cheque = Cheque::find($request['id']);
        $cheque->cheque_activo = false;
        $cheque->save();

        $info_cheques = User::find($user_id)->cheques()->where('cheque_activo', true)->get();

        return response()->json($info_cheques);
    }
}
