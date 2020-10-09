<?php

namespace App\Models\Admin;

use App\Notifications\PasswordReset;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['tipousuario_id','name','Apellidos','IdTipoDocumento','NumDoc','email','password','Estado'];
    protected $guardered=['id'];
    public $timestamps=false;

    public function tipo()
    {
        return $this->belongsTo('App\Models\Admin\Tipousuario','tipousuario_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }
    
}
