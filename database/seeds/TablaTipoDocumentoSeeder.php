<?php

use Illuminate\Database\Seeder;

class TablaTipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doc=[
            'cedula de ciudadania',
            'tarjeta de identidad',
            'cedula de extranjeria'
        ];

        foreach($doc as $key =>$value){
            DB::table('tipodocumento')->insert([
                'Descripcion'=>$value
            ]);
        }
    }
}
