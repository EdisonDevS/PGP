<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'cuenta_id','nombre_presupuesto','saldo_presupuesto','descripcion','divisa',
    ];
}
