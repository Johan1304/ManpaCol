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
            'Nombres' => 'Santiago',
            'Apellidos' => 'Aldana',
            'IdTipoUsuario' => 1,    
            'NumDoc' => '123456789',
            'Email' => 'johan@gmail.com',   
            'usuario' => 'admin123456',
            'password' => bcrypt('654321admin')
        ]);
    }
}
