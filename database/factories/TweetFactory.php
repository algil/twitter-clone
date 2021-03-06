<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Tweet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'body' => $faker->realText(280),
        'type' => 'tweet',
    ];
});
