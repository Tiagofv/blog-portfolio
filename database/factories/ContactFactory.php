<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'subject' => $faker->text(100),
        'message' => $faker->text(300)
    ];
});
