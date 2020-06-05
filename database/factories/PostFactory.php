<?php

use Faker\Generator as Faker;
use App\Post;
use App\User;

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
$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => random_int(0,10),
        'post_date' => $faker->date(),
        'post_content' => $faker->paragraph($nbSentences = 20),
        'post_title' => $faker->sentence(),
        'post_status' => $faker->randomElement(['publié','rédaction']),
        'post_name' => $faker->firstName(),
        'post_type' => 'article',
        'post_category' => $faker->randomElement(['voyage', 'cuisine', 'vie sociale']),
    ];
});

?>