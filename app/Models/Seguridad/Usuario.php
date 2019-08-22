<?php

namespace App\Models\Seguridad;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table='usuario';

    protected $fillable = [

        'IdTipoUsuario','Nombres','Apellidos','IdTipoDocumento','NumDoc','Email','usuario', 'password',

    ];

    protected $guarded = ['Id'];
}
