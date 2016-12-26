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
        'link' => $faker->domainName
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {

    return [
        'titre' => $faker->name,
        'link' => $faker->name,
        'used' => $faker->userAgent,
    ];
});



$factory->define(App\Meta::class, function (Faker\Generator $faker) {

    return [
        'titre' => $faker->title,
        'tag' => $faker->name,
        'description' => $faker->text(100)
    ];
});

