<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Alif Babrizq',
        //     'username' => 'alifbbq',
        //     'email' => 'alif@gmail.com',
        //     'password' => bcrypt('11111111')
        // ]);

        \App\Models\User::factory(4)->create();

        \App\Models\Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        \App\Models\Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        \App\Models\Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        \App\Models\Post::factory(30)->create();
    }
}
