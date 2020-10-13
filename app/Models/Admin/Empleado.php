<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table="empleado";
    protected $fillable = ['Nombres','Apellidos','IdTipoDocumento','NumeroDoc','Observaciones'];  
    protected $guardered=['id'];
    public $timestamps=false;

}
