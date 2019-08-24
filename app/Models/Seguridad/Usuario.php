<?php

namespace App\Models\Seguridad;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table='usuario';

    protected $fillable = ['TipoUsuario','Nombres','Apellidos','TipoDpcumento','Email','usuario','password'];

    protected $guarded = ['Id'];
}
