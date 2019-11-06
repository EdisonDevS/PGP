<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Cuenta;
use App\Tarjeta;
use App\Transaccion;


class User extends Authenticatable
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos', 'imagen', 'documento', 'tipo_documento', 'genero', 'fecha_nacimiento', 'telefono', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function cuentas()
    {
        return $this->hasMany(Cuenta::class);
    }

    public function tarjetas()
    {
        return $this->hasManyThrough(Tarjeta::class, Cuenta::class);
    }

    public function transacciones()
    {
        return $this->hasManyDeep(Transaccion::class, [Cuenta::class, Tarjeta::class]);
    }
}
