<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;
use App\Product;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    $products = App\Product::pluck('id')->toArray();
    $users = App\User::pluck('id')->toArray();
    return [
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'product_id' => $faker->randomElement($products),
        'user_id' => $faker->randomElement($users)
    ];
});
