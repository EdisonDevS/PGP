<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\User;
use App\Tarjeta;
use App\Transaccion;


class TestController extends Controller
{
    public function test()
    {
    	//$cuenta = Cuenta::where('numero_cuenta', '123')->get();
    	//dd($cuenta[0]->user);
    	dd(User::find(1)->transacciones);
    }
}
