<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Achyut Neupane',
            'username' => 'achyutneupane',
            'email' => 'achyutkneupane@gmail.com',
            'password' => Hash::make('Ghost0vperditi0n'),
            'type' => 'admin',
            'gender' => 'male',
            'email_verified_at' => now(),
            'remember_token' => \Illuminate\Support\Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
        if(env('APP_ENV') == 'local')
        {
            $faker = \Faker\Factory::create();
            \App\Models\Tag::factory(15)->create();
            \App\Models\Category::factory(5)->create();
            \App\Models\Article::factory(9)->create();
            foreach(\App\Models\Article::get() as $article)
            {
                $article->tags()->sync(\App\Models\Tag::take($faker->numberBetween(1,15))->get());
                $article->addMediaFromUrl('https://picsum.photos/1200/630')
                        ->toMediaCollection('cover');
            }
        }
    }
}
