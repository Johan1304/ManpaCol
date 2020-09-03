<?php

use Illuminate\Database\Seeder;

class TablaTipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $rol=[
            'adminstrador',
            'usuario'
        ];
        foreach($rol as $key => $value){    

            DB::table('tipousuario')->insert ([

                'Descripcio'=>$value

            ]);

        }
    }
}
