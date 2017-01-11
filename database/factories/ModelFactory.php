<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Product::class, function (Faker\Generator $faker) {

    return [
        'isbn' => $faker->unique()->isbn13,
        'name' => $faker->name,
        'content' => $faker->text(100),
        'quantity' => $faker->numberBetween(0,1000),
        'price' => $faker->numberBetween(0,1000000),
        'url' => $faker->domainName,
        'category' => $faker->numberBetween(1,4),
        'status' => $faker->numberBetween(1,3),
        'user_id' => $faker->numberBetween(1,3)
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->userName,
        'type' => $faker->mimeType,
        'url' => $faker->imageUrl(50,50,null,true,null,false),
        'size' => $faker->numberBetween(1,1000),
        'used' => $faker->firstName,
        'status' => $faker->numberBetween(1,3),
        'product_id' => $faker->numberBetween(1,15)
    ];
});



$factory->define(App\Meta::class, function (Faker\Generator $faker) {

    return [
        'tag' => $faker->jobTitle
    ];
});

