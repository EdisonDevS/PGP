<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaccion;

class Tarjeta extends Model
{
    protected $fillable = [
        'cuenta_id', 'numero_tarjeta', 'saldo', 'saldo_bajo', 'nombre_tarjeta', 'divisa', 'descripcion', 'tarjeta_activa',
    ];

    public function cuenta()
    {
    	return $this->belongsTo(Cuenta::class);
    }

    public function transacciones()
    {
    	return $this->hasMany(Transaccion::class);
    }
}
