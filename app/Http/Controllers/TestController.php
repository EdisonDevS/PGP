<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\User;
use App\Tarjeta;
use App\Transaccion;
use App\Presupuesto;

class TestController extends Controller
{
    public function test()
    {
    	//$cuenta = Cuenta::where('numero_cuenta', '123')->get();
    	//dd($cuenta[0]->user);

    	dd(User::first()->with('presupuestos')->get());
    	
    }
}
