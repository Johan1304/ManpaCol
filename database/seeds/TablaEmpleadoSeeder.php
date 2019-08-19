<?php

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class TablaEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Empleado::class,10)->create();
    }
}
