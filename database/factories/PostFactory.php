<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use App\Post_Tag;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
           
            // $table->unsignedInteger('user_id');
            // $table->string('title');
            // $table->text('description');
           

        'user_id' => App\User::all() -> random(),
        'title' => $faker -> sentence(3),
        'description' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true)

            
    ];
});
