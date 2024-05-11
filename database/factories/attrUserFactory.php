<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attrUser>
 */
$factory->define(App\attrUser::class, function (Faker $faker){
    return[
        'firstname' => faker->firstname,
        'lastname' => faker->lastname,
        'age' => faker->age,
        'nickname' => faker->nickname,

    ];
});