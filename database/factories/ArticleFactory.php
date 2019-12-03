<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'short_text' => $faker->text,
        'text' => $faker->text,
        'category_id' => $faker->randomDigitNotNull,
        'status_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
