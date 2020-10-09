<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Textura extends Model
{
    protected $table = "texturapapel";
    protected $fillable = ['descripcion'];  
    protected $guardered =['id'];
    public $timestamps=false;
}
