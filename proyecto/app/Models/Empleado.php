<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleado";
    protected $fillable = ['Id','Nombres', 'Apellidos', 'IdTipoDocumento','NumeroDoc', 'Observaciones'];
    // protected $guardered=['Id'];
    public $timestamps=false;
}
