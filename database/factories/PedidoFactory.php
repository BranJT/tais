<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Pedido::class, function (Faker $faker) {
    return [
    	'fecha' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
    ];
});
