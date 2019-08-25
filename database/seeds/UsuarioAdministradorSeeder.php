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
            'Nombres' => 'Johan',
            'Apellidos' => 'Barreto',
            'IdTipoUsuario' => 1,    
            'NumDoc' => '1000125608',
            'Email' => 'johan@gmail.com',   
            'usuario' => 'admin1',
            'password' => bcrypt('pass123')
        ]);
    }
}
