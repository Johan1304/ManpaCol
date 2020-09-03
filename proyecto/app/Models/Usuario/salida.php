<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table="salida";
    protected $fillable=['IdEmpleado','IdEncargado','created_at','Encargado'];
    protected $guardered=['id'];
    
}
