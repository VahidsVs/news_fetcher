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

        DB::table('categories')->insert([[
            'parent_name' => 'news-gnews.io',
            'name' => 'General',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=general&lang=de&apikey=',
            'source' => 'api',
            'source_data_type' => 'json',
            'status' => '1',
            'description' => 'gnews.io',
            'order'=>1
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'World',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=world&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>2
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Nation',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=nation&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>3
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Sports',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=sports&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>4
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Science',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=science&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>5
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Health',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=health&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>6
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Business',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=business&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>7
        ],
        [
            'parent_name' => 'news-gnews.io',
            'name' => 'Entertainment',
            'api_url' => 'https://gnews.io/api/v4/top-headlines?category=entertainment&lang=de&apikey=',
            'status' => '1',
            'source' => 'api',
            'source_data_type' => 'json',
            'description' => 'gnews.io',
            'order'=>8
            
        ],
        [
            'parent_name' => 'news-krone.at',
            'name' => 'Total',
            'api_url' => 'https://api.krone.at/v1/rss/rssfeed-google.xml?id=2311992',
            'status' => '1',
            'source' => 'rss',
            'source_data_type' => 'xml',
            'description' => 'krone.at',
            'order'=>1
            
        ]
    ]);
        DB::table('users')->insert([
            'first_name' => 'api',
            'last_name' => 'auto',
            'username' => 'user',
            'password' => 'pass',
            'user_type' => 'api'
        ]);
        }
}
