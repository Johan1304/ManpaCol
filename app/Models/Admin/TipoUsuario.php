<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    protected $table="tipousuario";
    protected $fillable = ['descripcion']; 
    protected $guardered=['id']; 

    protected $timestamp = false;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
