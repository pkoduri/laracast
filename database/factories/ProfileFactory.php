<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
            
            'user_id' => 1,
            'website_url' => 'http://www.joe.com',
            'github_url' => 'http://www.github.com',
            'twitter_url' => 'http://twitter.com/joe',
    ];
});
