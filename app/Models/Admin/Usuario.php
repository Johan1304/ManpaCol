<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['IdTipoUsuario','name','Apellidos','IdTipoDocumento','NumDoc','email','password','Estado'];
    protected $guardered=['id'];
    public $timestamps=false;

    

    
    
}
