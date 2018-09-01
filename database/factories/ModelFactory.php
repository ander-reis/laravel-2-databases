<?php

use Faker\Generator as Faker;

$factory->define(\App\Categoria::class, function (Faker $faker) {
    return [
        'categorias' => $faker->word
    ];
});

$factory->define(\App\Materia::class, function (Faker $faker) {
    return [
        'name' => $faker->name()
    ];
});

$factory->define(\App\Provider::class, function (Faker $faker) {
    return [
        'name' => $faker->name()
    ];
});

$factory->define(\App\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'sobrenome' => $faker->lastName()
    ];
});

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});

$factory->define(\App\Jornal::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});