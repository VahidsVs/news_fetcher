<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('parent_categories')->insert([
            'name' => 'News',
            'source' => 'api',
            'source_data_type' => 'json',
            'status' => '1',
            'description' => 'API-News',
        ]);
        DB::table('categories')->insert([[
            'parent_category_id' => 1,
            'name' => 'General',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=general&lang=de&apikey=',
            'status' => '1',
            'description' => 'gnews.io',
        ],
        [
            'parent_category_id' => 1,
            'name' => 'World',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=world&lang=de&apikey=',
            'status' => '1',
            'description' => 'gnews.io',
        ],
        [
            'parent_category_id' => 1,
            'name' => 'Sport',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=sports&lang=de&apikey=',
            'status' => '1',
            'description' => 'gnews.io',
        ]]);
        DB::table('users')->insert([
            'first_name' => 'Api',
            'last_name' => 'auto',
            'username' => 'user',
            'password' => 'pass',
            'user_type' => 'api',
        ]);
        }
}
