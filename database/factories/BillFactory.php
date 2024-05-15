<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Bill;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
$factory->define(Bill::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigitNotNull,
        'backId' =>$faker->name($gender = null|'male'|'female'),
        'contact_id' =>$faker->randomDigitNotNull,
        'contact_name' => $faker->randomDigitNotNull,
        'amount' => $faker->numberBetween($min=200, $max=2000),
        'desc'=> $faker->text($maxNbChars=200),
        'date'=> $faker->unixTime(),
        'change'=> $faker->lexify(),
        'documentType'=> $faker->randomElements(['purchase','invoice']),
        'accountNum'=> $faker->randomDigitNotNull,
        'document_id' => $faker->randomDigitNotNull,

    ];
});

