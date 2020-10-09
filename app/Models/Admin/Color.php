<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "color";
    protected $fillable = ['descripcion'];  
    protected $guardered=['id'];
    public $timestamps=false;
}
