<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Product;
use App\Supplier;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
    $suppliers = App\Supplier::pluck('id')->toArray();
    $categories = App\Category::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'barcode' => $faker->ean13,
        'qty' => $faker->randomDigit,
        'price' => $faker->randomDigit,
        'photo' => 'upload/suppliers/default.png',
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'supplier_id' => $faker->randomElement($suppliers),
        'category_id' => $faker->randomElement($categories)
    ];
});
