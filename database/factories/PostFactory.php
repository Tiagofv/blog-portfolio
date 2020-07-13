<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->title;
    return [
        'author' => factory(\App\User::class)->create()->id,
        'content' => $faker->randomHtml(),
        'slug' => Str::slug($title),
        'title' => $title,
        'description' => $faker->text,
        'categories' => 'Tecnologia',
        'published' => true
    ];
});
