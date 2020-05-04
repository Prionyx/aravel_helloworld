<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'meta_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'meta_keywords' => implode(',', $faker->words($nb = 3, $asText = false)),
        'excerpt' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
        'body' => $faker->paragraphs($nb = 8, $asText = true),
        'active' => true,
    ];
});
