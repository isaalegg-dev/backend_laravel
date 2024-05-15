<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Account;


$factory->define(Account::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigitNotNull,
        'name' =>$faker->name($gender = null|'male'|'female'),
        'color' =>$faker->hexColor(),
        'accountNum' => $faker->randomDigitNotNull,
    ];
});
