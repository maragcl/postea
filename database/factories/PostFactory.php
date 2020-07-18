<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Iluminate\Support\Facades\Storage;

$factory->define(Post::class, function (Faker $faker){
    $users =User::all();
    $users_ids = array();
    foreach($users as $user)
    {
        $users_ids[] = $user->id;
    }

    $users_id = $users_ids[array_rand($user_ids)];
    Storage::disk('public')->makeDirectory('posts'.$user_id);

    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'img' => $faker>image('public/storage/posts/'.$user_id, 400, 300, null, false),
        'tags' => $faker->words($nb = 3, $asText = false),
        'user_id' => $user_id,
    ];
});