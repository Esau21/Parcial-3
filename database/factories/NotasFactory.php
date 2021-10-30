<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Notas;
use Faker\Generator as Faker;

$factory->define(Notas::class, function (Faker $faker) {
    return [
        'nota1' => '10',
        'nota2' => '8.90',
        'nota3' => '8.60',
        'nota4'=> '7.60',
        'parcial' => '9',
        'promedio' => '8.82',
        'alumnos' => 'Esau Zelaya',
        'cursos' => 'programacion 3',
        'profesor' => 'Jorge Coto'
    ];
});
