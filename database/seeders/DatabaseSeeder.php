<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Roles;

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
        Category::create([
            'name' => 'Economy',
            'slug' => 'economy'
        ]);
        Category::create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);
        Category::create([
            'name' => 'Cryptocurrency',
            'slug' => 'cryptocurrency'
        ]);
        Roles::create([
            'role' => 'Admin'
        ]);
        Roles::create([
            'role' => 'Member'
        ]);
        Post::Factory(20)->create();
    }
}
