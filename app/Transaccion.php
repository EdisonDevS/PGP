<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tarjeta;
use App\Cuenta;

class Transaccion extends Model
{
    protected $fillable = [
        'tarjeta_id', 'valor', 'descripcion', 'cuenta_destino_id', 'transaccion_activa',
    ];

    public function tarjeta()
    {
    	return $this->belongsTo(Tarjeta::class);
    }

    public function cuenta_destino()
    {
    	return $this->belongsTo(Cuenta::class);
    }
}
