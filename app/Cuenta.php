<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cuenta;
use App\User;
use App\Tarjeta;

class Cuenta extends Model
{
    protected $fillable = [
        'user_id', 'saldo', 'saldo_bajo', 'numero_cuenta', 'nombre_cuenta', 'tipo_cuenta', 'divisa', 'descripcion', 'banco', 'activa',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function tarjetas()
    {
    	return $this->hasMany(Tarjeta::class);
    }

}
