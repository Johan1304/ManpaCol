<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['IdTipoUsuario','Nombres','Apellidos','IdTipoDocumento','NumDoc','Email','usuario','password','Estado'];

    
    
}
