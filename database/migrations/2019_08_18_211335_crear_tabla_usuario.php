<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('tipousuario');
            $table->foreign('tipousuario','fk_usuario_tipousuario',60)->references(id)->on('tipousuario')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombres',60);
            $table->string('apellidos',60);
            $table->string('nombres',60);
            $table->unsignedInteger('tipodocumento');
            $table->foreign('tipodocumento','fk_usuario_tipodocumento',60)->references(id)->on('tipodocumento')->onDelete('restrict')->onUpdate('restrict');
            $table->string('documento',40);
            $table->string('email',60);
            $table->string('contraseña',100);
            $table->boolean('estado',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
