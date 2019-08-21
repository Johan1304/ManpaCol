<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'IdTipoDocumento'=>1,
            'IdTipoUsuario' => 1,       
            'usuario' => 'admin',
            'Password' => bcrypt('pass123')
        ]);
    }
}
