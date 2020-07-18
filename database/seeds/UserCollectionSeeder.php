<?php

use Illuminate\Database\Seeder;

class UserCollectionSeeder extends Seeder
{
    public function run()
    {
       $user = factory(App\User::class,10)
         ->create()
         ->each( function ($user) {
           $user->posts()->createMany(
             factory(App\Post::class, 5)-make()->toArray()
           );
         });
    }
}

#use Illuminate\Database\Seeder;

#class UserCollectionSeeder extends Seeder
#{
 #   public function run()
  #  {
 #       factory(App\User::class,5)->create();
 #       factory(App\User::class)->create([
 #       'name'=>"mar",
 #       'email'=>"mar@gmail.com",
 #       'password'=>Hash::make('hola123'),
 #       ]);    
 #   }
#}
