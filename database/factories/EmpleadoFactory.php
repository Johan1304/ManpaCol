<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        //
        'Nombres' => $faker->word,
        'Apellidos' => $faker->word,
        'IdTipoDocumento' => $faker->unique()->randomDigit,
        'NumeroDoc' => $faker->word,
        'Observaciones'=>$faker->text
    ];
});
