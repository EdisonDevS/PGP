<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    protected $fillable = [
        'cuenta_id', 'valor', 'descripcion', 'nombre_destinatario', 'documento_destinatario', 'fecha_de_expendio', 'numero_cheque', 'cheque_activo',
    ];
}
