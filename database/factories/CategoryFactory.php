<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $title = ucfirst($faker->unique()->words(2, true)),
        'name' => strtolower(str_replace(' ', '-', $title)),
        'image' => $faker->imageUrl(640, 480),
    ];
});
