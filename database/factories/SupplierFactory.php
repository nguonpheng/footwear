<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Supplier;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'address' => $faker->address,
        'city' => $faker->city,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'photo' => 'upload/suppliers/default.png',
    ];
});
