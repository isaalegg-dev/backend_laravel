<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
$factory->define(Contact::class, function (Faker $faker) {
    $name = $faker->name($gender = null|'male'|'female');
    $num = $faker->numberBetween(100000000,999999999);

    return [
        'id' => $faker->randomDigitNotNull,
        'name' => $name,
        'mobile' => $faker->phoneNumber(),
        'clientRecord' => json_decode(array('name'=>$name, 'num'=>$num)),
    ];
});



