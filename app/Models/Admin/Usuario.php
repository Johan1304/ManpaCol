<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['TipoUsuario','Nombres','Apellidos','TipoDpcumento','Email','usuario','password'];
    protected $guarded = ['Id'];
    protected $timestamp = false;
}
