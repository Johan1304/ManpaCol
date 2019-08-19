<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTablas([
            'tipousuario',
            'tipodocumento'
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(TablaTipoUsuarioSeeder::class);
        $this->call(TablaTipoDocumentoSeeder::class);
        $this->call(TablaEmpleadoSeeder::class);


    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
