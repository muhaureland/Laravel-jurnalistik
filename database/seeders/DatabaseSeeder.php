<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(10)->create();
        Post::factory(13)->create();
        Category::create([
            'name'  => 'web programming',
            'slug'  => 'web-programming'
        ]);
        Category::create([
            'name'  => 'personal',
            'slug'  => 'personal'
        ]);
        Category::create([
            'name'  => 'design kreative',
            'slug'  => 'design-kreative'
        ]);
        Category::create([
            'name'  => 'mobile programming',
            'slug'  => 'mobile-programming'
        ]);
        Category::create([
            'name'  => 'mobile legend',
            'slug'  => 'mobile-legend'
        ]);
    }
}
