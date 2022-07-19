<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //
        DB::table('posts')->insert([[
                'title' => 'first post',
                'body' => 'this is my first post',
                'post_created_at' => date('Y-m-d', strtotime('01.01.2020'))
            ],
            [
                'title' => 'second post',
                'body' => 'this is my second post',
                'post_created_at' => date('Y-m-d', strtotime('01.01.2021'))
            ],
            [
                'title' => 'third post',
                'body' => 'this is my third post',
                'post_created_at' => date('Y-m-d', strtotime('01.01.2022'))
            ]
            ]);
    }
}
